<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order_items;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Support\Str;


class CodController extends Controller
{
public function placeOrder(Request $request)
{
    // Validate checkout information
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'shipping_address' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'note' => 'nullable|string|max:255',
    ]);

    $user_id = Auth::id();

    // Get cart items with product prices
    $cartItems = Cart::join(
        'products',
        'carts.product_id',
        '=',
        'products.id'
    )
        ->where('carts.user_id', $user_id)
        ->select(
            'carts.product_id',
            'carts.quantity',
            'products.price'
        )
        ->get();

    // Prevent empty cart checkout
    if ($cartItems->isEmpty()) {
        return redirect()->route('cartpage')
            ->with('error', 'Your cart is empty.');
    }

    // Calculate total amount
    $totalamount = 0;

    foreach ($cartItems as $item) {
        $totalamount += $item->price * $item->quantity;
    }

    // Delivery charge
    $deliverycharge = 150;

    $totalamount += $deliverycharge;

    // Transaction UUID
    $transactionId = (string) Str::uuid();

    // COD payment information
    $status = 'processing';
    $payment_method = 'cod';
    $payment_status = 'pending';

    // Create order
    $order = new Orders();

    $order->user_id = $user_id;
    $order->name = $request->input('name');
    $order->email = $request->input('email');
    $order->shipping_address = $request->input('shipping_address');
    $order->phone_number = $request->input('phone');
    $order->total_amount = $totalamount;
    $order->transaction_uuid = $transactionId;
    $order->status = $status;
    $order->payment_method = $payment_method;
    $order->payment_status = $payment_status;
    $order->note = $request->input('note') ?? '';

    $order->save();

    // Create order items
    foreach ($cartItems as $item) {

        $orderItem = new Order_items();

        $orderItem->order_id = $order->id;
        $orderItem->product_id = $item->product_id;
        $orderItem->quantity = $item->quantity;
        $orderItem->price = $item->price;

        $orderItem->save();
    }

    // Clear user's cart
    Cart::where('user_id', $user_id)->delete();

    // COD success page
    return view('cod.success', [
        'orderId' => $order->id,
        'totalamount' => $totalamount,
        'transactionId' => $transactionId,
    ]);
}
}
