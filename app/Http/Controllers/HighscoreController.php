<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HighscoreController extends Controller
{
    public function index()
    {
    	$users = User::all();

    	foreach ($users as $key => $user) {
    		if ( !isset($user->info) )
    			continue;

	    	if ($user->info->class->slug == 'jogos-digitais')
	    		$jd[] = $user;

	    	if ($user->info->class->slug == 'seguranca')
	    		$si[] = $user;

	    	if ($user->info->class->slug == 'ads')
	    		$ads[] = $user;
    	}



    	return view('highscore.index')
    		->with([
    			'jd' => $jd,
    			'si' => $si,
    			'ads' => $ads
    		]);
    }
}
