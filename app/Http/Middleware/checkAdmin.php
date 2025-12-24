<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has the "admin" role
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Redirect or abort for unauthorized users
        return redirect()->route('home')->with('error', 'Access Denied: Admins only!');
    }
}