<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Money;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['name', 'email', 'password', 'avatar', 'nickname', 'username', 'avatar_id'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = [
        'tutorial' => 'boolean',
    ];

    public function hasAchievement()
    {
        return false;
    }

    public function getBadge($type)
    {
        //Inicia a collection para armazenar todas as medalhas
        $badges = collect();
        //Passa por todos os achievements do jogador
        foreach ($this->achievements as $key => $achievement) {
            //Verifica se a badge é do mesmo tipo passada no parametro
            if ($achievement->badge->type == $type) {
                $badges->push($achievement->badge);
            }
        }

        return !$badges->isEmpty() ? $badges : collect();
    }

    public function achievements()
    {
        return $this->belongsToMany('App\Models\Achievement')
            ->with('badge')
            ->withTimestamps();
    }

    public function getAvatar()
    {
        if (!is_null($this->avatar_id))
            return asset(\App\Models\Avatar::find($this->avatar_id)->path);
        else
            return '';
        
    }    

    public function stats()
    {
        return $this->hasOne('App\Models\Stats');
    }

    public function wallet()
    {
        return $this->hasOne('App\Models\Wallet');
    }

    public function account()
    {
        return $this->hasOne('App\Models\Account');
    }

    public function info()
    {
        return $this->hasOne('App\Models\Info');
    }
}
