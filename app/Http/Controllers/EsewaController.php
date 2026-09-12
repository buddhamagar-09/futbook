<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order_items;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class EsewaController extends Controller
{

    public function initiatepayment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'shipping_address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'note' => 'nullable|string|max:255',
        ]);
        $user = Auth::user();
        $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $user->id)
            ->select(
                'carts.product_id',
                'carts.quantity',
                'products.price'
            )
            ->get();

        // Calculate total
        $totalAmount = 0;
        foreach ($cartItems as $item) {
            $totalAmount += $item->price * $item->quantity;
        }
        // Add delivery charge
        $deliveryCharge = 150;
        $totalAmount += $deliveryCharge;
        //transaction uuid
        $transactionId = (string) Str::uuid();

        //esewa configuration
        $product_code = config('esewa.product_code');
        $secret_key = config('esewa.secret_key');

        //create signatures
        $signedFieldNames = 'total_amount,transaction_uuid,product_code';

        $signedString =
            "total_amount={$totalAmount}," .
            "transaction_uuid={$transactionId}," .
            "product_code={$product_code}";

        $signature = base64_encode(
            hash_hmac('sha256', $signedString, $secret_key, true)
        );

        // Save shipping details to session
        $CheckoutDetails = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'shipping_address' => $request->input('shipping_address'),
            'phone' => $request->input('phone'),
            'note' => $request->input('note'),
        ];

        session([
            'Checkout_details' => $CheckoutDetails,
            'transaction_uuid' => $transactionId,
            'total_amount' => $totalAmount,
        ]);

        return view('esewa.esewaform', [
            'amount' => $totalAmount,
            'transaction_uuid' => $transactionId,
            'product_code' => $product_code,
            'signed_field_names' => $signedFieldNames,
            'signature' => $signature,
        ]);
    }
    public function success(Request $request)
    {
        // Decode base64 data from eSewa
        $decoded_data = base64_decode($request->data);

        // Convert JSON into PHP array
        $data = json_decode($decoded_data, true);

        if (!$data) {
            die("Invalid access. Couldn't decode data!!");
        }

        // Payment details from eSewa 
        $amt = $data['total_amount'];
        $oid = $data['transaction_uuid'];
        $ref_id = $data['transaction_code'];
        $status = $data['status'];

        // Get checkout details from session
        $checkoutDetails = session('Checkout_details');

        // Get transaction UUID from session
        $transaction_uuid = session('transaction_uuid');

        // Make sure session data exists
        if (!$checkoutDetails || !$transaction_uuid) {
            die("Checkout session expired.");
        }

        // Total amount from session
        $total_price = session('total_amount');

        // Match check
        if ((float) $amt != (float) $total_price || $oid != $transaction_uuid) {
            die("Transaction mismatch.");
        }

        // Check payment status
        if ($status !== 'COMPLETE') {
            die("Payment was not successful.");
        }

        // Duplicate order check
        $existingOrder = Orders::where(
            'transaction_uuid',
            $oid
        )->first();

        if ($existingOrder) {
            die("Order already exists.");
        }

        // Payment status
        $payment_status = 'paid';

        // Create order
        $order = new Orders();

        $order->user_id = Auth::id();
        $order->name = $checkoutDetails['name'];
        $order->email = $checkoutDetails['email'];
        $order->phone_number = $checkoutDetails['phone'];

        // Include  shipping address
        $order->shipping_address = $checkoutDetails['shipping_address'];

        $order->note = $checkoutDetails['note'] ?? null;

        $order->total_amount = $total_price;
        $order->transaction_uuid = $transaction_uuid;
        $order->payment_method = 'esewa';
        $order->payment_status = $payment_status;
        $order->status = 'pending';

        $order->save();

        // Get newly created order ID
        $order_id = $order->id;

        // Get user's cart
        $cartItems = Cart::where('user_id', Auth::id())->get();

        // Create order items
        foreach ($cartItems as $item) {
            $product = Product::find($item->product_id);

            $orderItem = new Order_items();

            $orderItem->order_id = $order_id;
            $orderItem->product_id = $item->product_id;
            $orderItem->quantity = $item->quantity;
            $orderItem->price = $product->price;

            $orderItem->save();

            // Reduce product stock
            Product::where('id', $item->product_id)
                ->where('quantity', '>=', $item->quantity)
                ->decrement('quantity', $item->quantity);
        }

        // Clear cart
        Cart::where('user_id', Auth::id())->delete();

        // Clear checkout session
        session()->forget([
            'Checkout_details',
            'transaction_uuid',
            'total_amount',
        ]);

        // return redirect()->route('order.success')
        //     ->with('success', 'Payment successful and order placed!');
        return view('esewa.success', [
            'order_id' => $order_id,
            'transaction_code' => $ref_id,
            'total_amount' => $total_price,
        ]);

    }

    public function failure(Request $request)
    {

        // | Case 1: eSewa sends payment data

        if ($request->data) {

            // Decode base64 data
            $decoded_data = base64_decode($request->data);

            // Convert JSON into PHP array
            $data = json_decode($decoded_data, true);

            if ($data) {

                $ref_id = $data['transaction_code'] ?? 'N/A';
                $status = $data['status'] ?? 'FAILED';

            } else {

                $ref_id = 'N/A';
                $status = 'FAILED';

            }

        }

        //  | Case 2: eSewa does not send payment data (e.g., user cancels the payment)
        else {

            $ref_id = 'N/A';
            $status = 'CANCELLED';

        }

        // | Get amount from session

        $total_price = session('total_amount', 0);

        //    clear checkout session

        session()->forget([
            'Checkout_details',
            'transaction_uuid',
            'total_amount',
        ]);


        //   show failure view with transaction details

        return view('esewa.failure', [

            'transaction_code' => $ref_id,

            'total_amount' => $total_price,

            'status' => $status,

        ]);
    }


}
