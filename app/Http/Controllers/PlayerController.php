<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Avatar;
use App\Models\Info;
use Auth;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * retorna a página principal do jogador
     *
     * @return \Illuminate\Http\Response
     */
    public function personal($username)
    {
        //Carrega o user pelo username
        $user = User::where('username', $username)->with('achievements')->first();

        //Se o usuário autenticado for o mesmo que o username passado no url
        //vai poder ver coisas ocultas na página de perfil
        if(! is_null(Auth::user()))
            $has_permission = Auth::user()->username == $username ? true : false;
        else
            $has_permission = false;

        return view('personal.index')
            ->with('user', $user)
            ->with('has_permission', $has_permission);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::user();


        $user->username = $request->username;
        $user->nickname = $request->nickname;
        $user->avatar_id = $request->selected_avatar;

        $user->save();

        return redirect('escolher');
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

    public function info()
    {
        $avatars = Avatar::where('active', 1)->inRandomOrder()->get();

        return view('auth.more_detail')
            ->with('avatars', $avatars);
    }
}
