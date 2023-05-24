<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMiddleware
{
    public function handle($request, Closure $next)
    {
        // Retrieve the API key query parameters
        $apiKey = $request->query('api_key');

        // Check key value
        $validKey = '12345';
        if ($apiKey === $validKey) {
            return $next($request);
        }
        return response()->json(['error' => 'Invalid API keys'], 401);
    }
}
