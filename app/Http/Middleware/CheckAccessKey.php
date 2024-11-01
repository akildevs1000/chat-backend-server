<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAccessKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Retrieve the access key from the environment
        $accessKey = env('ACCESS_KEY');

        // Check if the access key is provided in the request headers
        if ($request->header('X-Access-Key') !== $accessKey) {
            // Return a 403 Forbidden response if the key doesn't match
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        return $next($request);
    }
}
