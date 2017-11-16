<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HighscoreController extends Controller
{
    public function index()
    {
    	$users = User::all();
        
        $jd_sum = 0; $si_sum = 0; $ads_sum = 0; $jd_cont = 0; $si_cont = 0; $ads_cont = 0;
        foreach ($users as $key => $user) {
            $players[$key]['user'] = $user;
            $players[$key]['level'] = $user->stats->calclevel();

            switch ($user->info->class->slug) {
                case 'jogos-digitais':
                    $jd_sum += $user->stats->calclevel();
                    $jd_players[$key]['user'] = $user;
                    $jd_players[$key]['level'] = $user->stats->calclevel();
                    $jd_cont++;
                    break;

                case 'seguranca':
                    $si_sum += $user->stats->calclevel();
                    $si_players[$key]['user'] = $user;
                    $si_players[$key]['level'] = $user->stats->calclevel();
                    $si_cont++;
                    break;

                case 'ads':
                    $ads_sum += $user->stats->calclevel();
                    $ads_players[$key]['user'] = $user;
                    $ads_players[$key]['level'] = $user->stats->calclevel();
                    $ads_cont++;
                    break;
            }
        }

        rsort($players);
        rsort($si_players);
        rsort($ads_players);
        rsort($jd_players);

        return view('highscore.index')->with([
            'jd_sum' => $jd_sum/$jd_cont,
            'si_sum' => $si_sum/$si_cont,
            'ads_sum' => $ads_sum/$ads_cont,
        ])
        ->with('strongest', array_slice($players, 0, 3))
        ->with([
            'jd_strongest' => array_slice($jd_players, 0, 5),
            'si_strongest' => array_slice($si_players, 0, 5),
            'ads_strongest' => array_slice($ads_players, 0, 5),
        ]);
    }
}
