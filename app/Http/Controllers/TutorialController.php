<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Tutorial;
use Auth;

class TutorialController extends Controller
{
    public function finish()
    {
        //Pega o jogador autenticado
        $user = Auth::user(); 

        //Marca o tutorial como completo
        $user->tutorial = true;

        $user->save();

        //Dispara evento do tutorial
        // event(new Tutorial([
        //     'success' => true,
        //     'achievement' => 'TutorialCompleted',
        //     'user' => $user
        // ]));

        return redirect('home');
    }
}