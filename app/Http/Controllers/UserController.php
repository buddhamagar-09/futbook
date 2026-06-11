<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;

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
    }
}
