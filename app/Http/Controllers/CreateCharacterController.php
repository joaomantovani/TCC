<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlayerClass;

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
    		->with('classes', $classes);
    }
}
