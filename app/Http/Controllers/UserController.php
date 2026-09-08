<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->usertype == 'user') {
            return view('dashboard');
        } else if (Auth::check() && Auth::user()->usertype == 'admin') {
            return view('admin.dashboard');
        }
    }

    public function products()
    {
        $product = Product::all();
        return view('frontend.products', ['productlist' => $product]);
    }

    public function product_details(string $id)
    {
        $product = Product::find($id);
        return view('frontend.product_details', ['product' => $product]);

        // POSTMAN TESTING
        // return response()->json([
        //     'message' => 'Product details retrieved successfully',
        //     'product_details' => $product,

        // ], 200);
    }



    public function cartpage(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $cart = Cart::join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', Auth::id())
            ->select('carts.*', 'products.name', 'products.price', 'products.image', 'products.quantity as product_quantity')
            ->get();
        return view('frontend.cart', ['cart' => $cart]);
    }

    public function addtocart(Request $request, string $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $cart = Cart::where('user_id', Auth::id())
            ->where('product_id', $id)
            ->first();

        if ($cart) {

            $newQuantity = $cart->quantity + $request->quantity;

            if ($newQuantity > $product->quantity) {
                return redirect()->back()->with(
                    'error',
                    'You cannot add more than the available stock!'
                );
            }

            $cart->quantity = $newQuantity;
            $cart->save();

        } else {

            if ($request->quantity > $product->quantity) {
                return redirect()->back()->with(
                    'error',
                    'Requested quantity is not available in stock!'
                );
            }

            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $id;
            $cart->quantity = $request->quantity;
            $cart->save();
        }

        return redirect()
            ->route('cartpage')
            ->with('success', 'Product added to cart successfully!');
    }

    public function removecart(string $id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->delete();
            return redirect()->route('cartpage')->with('success', 'Product removed from cart successfully!');
        } else {
            return redirect()->route('cartpage')->with('error', 'Product not found in cart!');
        }
    }

    public function updatecart(Request $request, string $id)
    {
        $cart = Cart::where('user_id', Auth::id())->where('id', $id)->first();
        if ($cart) {
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->route('cartpage')->with('success', 'Cart updated successfully!');
        } else {
            return redirect()->route('cartpage')->with('error', 'Product not found in cart!');
        }
    }

    public function checkout()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $cart = Cart::join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', Auth::id())
            ->select(
                'carts.id',
                'carts.product_id',
                'carts.quantity',
                'products.price',
                'products.name',
                'products.image'
            )
            ->get();

        return view('frontend.checkout', ['cart' => $cart]);
    }

    public function contact()
    {
        return view('frontend.contactus');
    }
}
