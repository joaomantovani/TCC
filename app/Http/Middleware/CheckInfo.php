<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckInfo
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
        //Se o usuario nao tiver definido as infos principais
        if ( is_null(Auth::user()->username) )
            return redirect('/player/info');

        return $next($request);
    }
}
