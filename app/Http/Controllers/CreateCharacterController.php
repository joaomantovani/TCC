<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlayerClass;
use App\Models\Config;
use Auth;

class CreateCharacterController extends Controller
{
	/**
	 * Retorna a view para escolher uma classe
	 * @return [type] [description]
	 */
    public function class()
    {
    	$classes = PlayerClass::all();

    	return view('escolher')
    		->with('classes', $classes)
        ->with([
          'jd_count' => count(PlayerClass::where('slug', 'jogos-digitais')->get()),
          'si_count' => count(PlayerClass::where('slug', 'seguranca')->get()),
          'ads_count' => count(PlayerClass::where('slug', 'ads')->get()),
        ]);
    }

    public function choose(Request $request)
    {
        $class = PlayerClass::find($request->class_id);
        $user = Auth::user();

        //Atribui a classe ao jogador
        $user->info()->create([
            'class_id' => $class->id,
        ]);

        //pega os stats iniciais para a classe escolhida
        $stats = Config::getStats($class->id);

        //Atribui os stats iniciais
        $user->stats->inteligence = $stats['inteligence'];
        $user->stats->charisma = $stats['charisma'];
        $user->stats->audacity = $stats['audacity'];
        $user->stats->luck = $stats['luck'];
        $user->stats->save();

        return redirect('tutorial');
    }
}
