<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share the current user's cart item count with the storefront header.
        View::composer('frontend.header', function ($view): void {
            $cartCount = Auth::check()
                ? (int) Cart::where('user_id', Auth::id())->sum('quantity')
                : 0;

            $view->with('cartCount', $cartCount);
        });
    }
}
