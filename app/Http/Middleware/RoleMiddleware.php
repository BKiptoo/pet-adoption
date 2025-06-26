<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }
        // If the user is not authenticated or does not have the required role, redirect or return an error
        return response()->json(['error' => 'Unauthorized'], 403);
        // Alternatively, you can redirect to a specific route
        // return redirect()->route('unauthorized');
    }
}
