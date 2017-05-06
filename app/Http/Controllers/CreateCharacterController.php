<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlayerClass;
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
    		->with('classes', $classes);
    }

    public function choose(Request $request)
    {
        $class = PlayerClass::find($request->class_slug);
        $user = Auth::user();
        
        return response()->json([
            'success' => true,
        ]);
    }
}
