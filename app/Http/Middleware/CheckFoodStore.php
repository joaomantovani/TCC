<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\Store;

class CheckFoodStore
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
        //Carrega a loja pelo path passado pela url
        $store = Store::where('slug', $request->path())->first();

        //Se o usuario não tiver level suficiente para entrar na loja
        // if (Auth::user()->stats->level < $store->respect)
        //     return redirect('403');

        return $next($request);
    }
}
