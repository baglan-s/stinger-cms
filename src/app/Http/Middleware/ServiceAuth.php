<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ServiceToken;

class ServiceAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (ServiceToken::where('token', $request->bearerToken())->count() == 0) {
            return response()->json(['error' => 'Unauthenticated!'], 401);
        }

        return $next($request);
    }
}
