<?php

namespace App\Http\Middleware;

use Closure;

class MaxiMiddleware
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
        if (\Auth::check() && \Auth::user()->email == 'maxiyanez84@gmail.com') {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
