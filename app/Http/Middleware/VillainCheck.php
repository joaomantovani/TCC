<?php

namespace App\Http\Middleware;

use Closure;
use App\Events\Villain;

class VillainCheck
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
        $chance = mt_rand(1,100);

        //Se o vilao for aparecer
        if($chance > 50)
            return redirect('vilao');

        return $next($request);
    }
}
