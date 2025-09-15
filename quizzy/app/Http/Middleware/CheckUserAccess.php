<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserAccess
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // User is authenticated, proceed to the next request
            return $next($request);
        }

        // User is not authenticated, redirect them to the login page
        return redirect('/login');
    }
}
