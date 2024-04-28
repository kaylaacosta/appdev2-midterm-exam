<?php

namespace App\Http\Middleware;

use Closure;

class ProductAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $validToken = env('VALID_TOKEN');

        if (!$request->hasHeader('Authorization')) {
            return response()->json(['message' => 'Token is missing'], 401);
        }

        $token = $request->header('Authorization');

        if ($token !== $validToken) {
            return response()->json(['message' => 'Token is invalid'], 401);
        }

        return $next($request);
    }
}
