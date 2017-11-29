<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckTutorial
{
    public function handle($request, Closure $next)
    {
        //Se o usuário autenticado não tiver feito o tutorial
        if(!Auth::user()->tutorial) {
            //Manda o jogador para a tela de tutorial
            return redirect('tutorial');
        }

        return $next($request);
    }
}
