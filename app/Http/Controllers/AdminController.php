<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = new Product();
        $product->name = $request->input('product_name');
        $product->description = $request->input('product_description');
        $product->price = $request->input('product_price');
        $product->quantity = $request->input('product_quantity');

        //for image
        $image = $request->file('product_image');
        $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image/products'), $image_name);
        $product->image = $image_name;
        $product->save();
        return redirect()->back()->with('success', 'Product added successfully!');
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
        return view('admin.products.edit_productform', ['eproduct' => $edit_product]);
    }

    public function update_products(Request $request, string $id)
    {
        
    }
}
