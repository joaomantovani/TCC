<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Store;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        $jd_sum = 0; $si_sum = 0; $ads_sum = 0;
        $jd_cont = 1; $si_cont = 1; $ads_cont = 1;
        
        foreach ($users as $key => $user) {
            if (is_null($user->info)) continue;

            switch ($user->info->class->slug) {
                case 'jogos-digitais':
                    $jd_sum += $user->stats->calclevel();
                    $jd_cont++;
                    break;

                case 'seguranca':
                    $si_sum += $user->stats->calclevel();
                    $si_cont++;
                    break;

                case 'ads':
                    $ads_sum += $user->stats->calclevel();
                    $ads_cont++;
                    break;
            }
        }

        return view('home')->with([
            'jd_sum' => $jd_sum/$jd_cont,
            'si_sum' => $si_sum/$si_cont,
            'ads_sum' => $ads_sum/$ads_cont,
        ])
        ->with('stores', Store::all());
    }
}
