<?php

namespace App\Http\Middleware;

use Closure;

class checktoken
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
        if ($request->header('token')) {
            return $next($request);
        } else {
            echo 'chua co token';
        }
    }
}
