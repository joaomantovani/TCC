<?php

namespace App\Http\Middleware;

use Closure;
use App\Events\Villain;

class VillainCheck
{
    public function handle($request, Closure $next)
    {
        $chance = mt_rand(1,100);

        if($chance > 50)
            return redirect('vilao');

        return $next($request);
    }
}
