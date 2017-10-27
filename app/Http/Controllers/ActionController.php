<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Action;
use Auth;
use Log;
use Money;

class ActionController extends Controller
{
    /**
     * Mostra a tela inicial
     * 
     * @return [view] [view principal]
     */
    public function index()
    {
    	$actions = Action::orderBy('difficult', 'asc')->get();

    	return view('action.index')
    		->with('actions', $actions);
    }

    /**
     * Controller da ajax para controlar as ações
     * 
     * @param  Request $request [Model action do form]
     * @return [json]           [Se obteve sucesso ou fail]
     */
    public function action(Request $request)
    {
        //Carrega o jogador
    	$user = Auth::user();
        
        //Verifica se o jogador não tem stamina suficiente
        if( $user->stats->stamina < $request->input('action.energy_required') )
            return response()->json([
                'success' => false,
                'message' => 'Você não tem stamina suficiente para completar a ação'
            ]);

        //Diminui a stamina
        $user->stats->stamina -= $request->input('action.energy_required');
        
        //Adiciona a exp pro usuario
        $user->stats->exp += $request->input('action.exp');
        $user->stats->save();

        //Adiciona dinheiro pro usuario
        $user->wallet->money += $request->input('action.reward');
        $user->wallet->save();

    	return response()->json([
    	    'success' => true,
            'message' => 'Boa!, você é foda!',
            'stamina' => $user->stats->stamina,
            'reward' => $request->input('action.reward'),
            'toast' => [
                'heading' => 'Mais dinheiro na conta',
                'bgcolor' => '#2ecc71', 
                'message' => '<i class="bitcoin icon"></i>' . Money::convert($request->input('action.reward')) .' foram adicionados na sua carteira.',
            ],
            'money' => $user->wallet->money,
    	]);
    }
}