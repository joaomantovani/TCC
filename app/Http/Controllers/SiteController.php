<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlayerClass;

class SiteController extends Controller
{
    public function index()
    {
    	$jd = PlayerClass::where('slug', 'jogos-digitais');
    	$si = PlayerClass::where('slug', 'seguranca');
    	$ads = PlayerClass::where('slug', 'ads');

    	$classes = PlayerClass::all();
    	
    	return view('public.index')
    		->with([
    			'classes' => $classes,
    			'jd' => $jd,
    			'si' => $si,
    			'ads' => $ads
    		]);
    }

    public function credits()
    {
        return view('public.credits');   
    }
}
