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
        $response = $next($request);
        $response->header('Token_api', 'alo123');
        return $response;
    }
}
