<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard',[UserController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Admin Middleware
Route::middleware(['admin'])->group(function () {
      Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
      Route::get('/admin/users', [AdminController::class, 'Users'])->name('admin.users');
});
require __DIR__.'/auth.php';
