<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Admin Middleware
Route::middleware(['admin'])->group(function () {
    Route::get('/addproductForm', [AdminController::class, 'product_add_form'])->name('add.products');
    Route::post('/addproduct', [AdminController::class, 'product_add'])->name('admin.product.add');
    Route::get('/viewProducts',[AdminController::class, 'view_products'])->name('admin.view.products');
    Route::get('/deleteProducts/{id}',[AdminController::class, 'delete_products'])->name('admin.delete.product');
    Route::get('/editProducts/{id}',[AdminController::class, 'edit_products'])->name('admin.edit.product');
    Route::post('/updateProducts/{id}',[AdminController::class, 'update_products'])->name('admin.update.product');
    Route::get('/users',[AdminController::class, 'view_users'])->name('admin.view.users');
});
require __DIR__ . '/auth.php';
