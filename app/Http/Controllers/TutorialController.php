<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Tutorial;
use Auth;

class TutorialController extends Controller
{
    /**
     * Marca tutorial como completo e dispara o evento Tutorial
     * 
     * @return [type] [description]
     */
    public function finish()
    {
        //Pega o jogador autenticado
        $user = Auth::user(); 

        //Marca o tutorial como completo
        $user->tutorial = true;

        $user->save();

        //Dispara evento do tutorial
        event(new Tutorial([
            'success' => true,
            'achievement' => 'TutorialCompleted',
            'user' => $user
        ]));

        return redirect('home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Página inicial do tutorial
        return view('tutorial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}