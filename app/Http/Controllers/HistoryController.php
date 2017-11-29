<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('history.index');
    }

    public function scene0()
    {
        return view('history.scene0');
    }

    public function scene1()
    {
        return view('history.scene1');
    }

    public function scene2()
    {
        return view('history.scene2');
    }
}
