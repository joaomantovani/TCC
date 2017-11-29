<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Avatar;
use App\Models\Achievement;
use App\Models\Info;
use Auth;

class PlayerController extends Controller
{
    public function personal($username)
    {
        //Carrega o user pelo username
        $user = User::where('username', $username)->with('achievements')->first();

        $achievements = Achievement::orderBy('id', 'DESC')->get();

        //Se o usuário autenticado for o mesmo que o username passado no url
        //vai poder ver coisas ocultas na página de perfil
        if(! is_null(Auth::user()))
            $has_permission = Auth::user()->username == $username ? true : false;
        else
            $has_permission = false;

        return view('personal.index')
            ->with('user', $user)
            ->with('has_permission', $has_permission)
            ->with('achievements', $achievements);
}
    public function create(Request $request)
    {
        $user = Auth::user();


        $user->username = $request->username;
        $user->nickname = $request->nickname;

        $avatar = $request->selected_avatar;
        $user->avatar_id = $avatar;

        $user->save();

        return redirect('scene0');
    }

    public function info()
    {
        $avatars = Avatar::where('active', 1)->inRandomOrder()->get();

        return view('auth.more_detail')
            ->with('avatars', $avatars);
    }
}
