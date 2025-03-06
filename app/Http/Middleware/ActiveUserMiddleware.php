<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ActiveUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /*if (Auth::check() && !Auth::user()->isActive()) {
            return response()->json(['message' => 'Cuenta desactivada'], 403);
        }
        return $next($request);*/

        if (!Auth::check()) {
            return response()->json(['message' => 'No autenticado'], 401);
        }

        $user = Auth::user();

        if (!$user->status) {
            return response()->json(['message' => 'Cuenta desactivada'], 403);
        }

        return $next($request);
    }
}
