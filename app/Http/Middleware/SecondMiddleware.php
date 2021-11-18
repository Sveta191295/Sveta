<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecondMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $second)
    {
        echo "Second: " . $second;
        return $next($request);
    }

   
}
