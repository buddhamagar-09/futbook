<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function adminDashboard()
    {
        return view('admin.dashboard');
    }

    function Users()
    {
        return view('admin.products.users');
    }
    public function product_add_form()
    {
        return view('admin.products.addproductForm');
    }

    public function product_add(Request $request)
    {


        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string',
            'product_price' => 'required|numeric',
            'product_quantity' => 'required|integer',
            'product_image' => 'required'
        ]);

        $product = new Product();

        $product->name = $request->product_name;
        $product->description = $request->product_description;
        $product->price = $request->product_price;
        $product->quantity = $request->product_quantity;

        $image = $request->file('product_image');
        $image_name = uniqid() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('image/products'), $image_name);

        $product->image = $image_name;

        $product->save();

        return back()->with('success', 'Product added successfully!');

    }

    public function view_products()
    {
        $products = Product::all();
        return view('admin.products.viewproduct', ['productlist' => $products]);
    }

    public function delete_products(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function edit_products(string $id)
    {
        $edit_product = Product::find($id);
        return view('admin.products.Product_Edit', ['eproduct' => $edit_product]);
    }

    public function update_products(Request $request, string $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string',
            'product_price' => 'required|numeric',
            'product_quantity' => 'required|integer',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $product = Product::findOrFail($id);
        $product->name = $request->input('product_name');
        $product->description = $request->input('product_description');
        $product->price = $request->input('product_price');
        $product->quantity = $request->input('product_quantity');
        if ($request->hasFile('product_image')) {

            if ($file = $product->image) {
                $file_path = public_path('image/products/' . $file);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $image = $request->File('product_image');
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/products'), $image_name);
            $product->image = $image_name;

        }
        $product->save();
        return redirect()->route('admin.view.products')->with('success', 'Product updated Successfully!');
    }

    public function view_users()
    {
        $users = User::where('usertype', 'user')->get();
        return view('admin.products.view_users', ['users' => $users]);
    }

    public function delete_users(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function view_orders(Request $request)
    {
        $orders = Orders::with(['Order_items', 'Order_items.product'])->get();
        return view('admin.products.view_orders', ['orderlist' => $orders]);
    }

    public function view_orderdetails (string $id)
    {
        $order = Orders::with(['Order_items', 'Order_items.product'])->findOrFail($id);
        return view('admin.products.view_order_details', ['order' => $order]);
    }


    public function update_orderstatus(Request $request, string $id)
    {
        $order = Orders::findOrFail($id);
        $order->status = 'delivered';
        if( $order->payment_status === 'pending') {
            $order->payment_status = 'paid';
        }
        $order->save();
        return redirect()->back()->with('success', 'Order status updated to delivered.');
    }

    public function cancel_order(Request $request, string $id)
    {
        $order = Orders::findOrFail($id);
        $order->status = 'cancelled';
        $order->save();

        return redirect()->back()->with('success', 'Order has been cancelled.');
    }
}
