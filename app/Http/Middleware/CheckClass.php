<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckClass
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
        //Se o usuário autenticado não tiver feito o tutorial
        if(empty(Auth::user()->info->class)) {
            //Manda o jogador para a tela de tutorial
            return redirect('escolher');
        }
        
        return $next($request);
    }
}
