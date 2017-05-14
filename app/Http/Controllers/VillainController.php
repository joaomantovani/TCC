<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Events\Achievement as eAchievement;

class VillainController extends Controller
{
    public function index()
    {
    	event(new eAchievement('TutorialCompleted'));

    	return view('villain.index');
    }
}
