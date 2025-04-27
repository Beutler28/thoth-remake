<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecureHeaders
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set('Strict-Transport-Security', 'max-age=63072000; includeSubDomains; preload');

        return $response;
    }
}
