<?php

namespace App\Http\Middleware;

use Closure;

class Check_token
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
        if ($request->path() !== 'hello') {
            if (!$request->token) {
                return redirect('hello');
            }
        }
        return $next($request);
    }
}
