<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check() && Auth::user()->usertype == 'admin') {
            return $next($request);
        }
        if (Auth::check() && Auth::user()->usertype == 'user') {
            abort(403, 'Unauthorized action.');
        }
        abort(403, 'Unauthorized action.');
    }
}
