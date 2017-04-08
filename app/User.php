<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Money;

class User extends Authenticatable
{
    use Notifiable;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    // protected $table = 'users';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'email', 'password', 'avatar', 'nickname', 'username'];
    protected $hidden = ['password', 'remember_token'];
    // protected $dates = [];
    protected $casts = [
        'tutorial' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function avatar()
    {
        return $this->avatar;
    }

    /**
     * Pega todos os achievements [bronze]
     *
     * @param  $[type] [<Tipo da medalha, pode ser
     *                        bronze, silver, gold, platinum>]
     */
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

    // /**
    //  * Pega o dinheiro atual da carteira do jogador
    //  * @param  [bool] $convert true: converte para K,M. Ex: 1K e 10M
    //  *                         false: Dinheiro total, ex: 22131231
    //  * @return float       Dinheiro atual na carteira do jogador
    //  */
    // public function getWallet($convert = false)
    // {
    //     return $convert ? Money::convert($this->wallets->first()->money) : $this->wallets->first()->money;
    // }

    // /**
    //  * Retorna o dinheiro atual do jogador
    //  * @param  [bool] $convert true: converte para K,M. Ex: 1K e 10M
    //  *                         false: Dinheiro total, ex: 22131231
    //  * @return float       Dinheiro atual no banco do jogador
    //  */
    // public function getBank($convert = false)
    // {
    //     return $convert ? Money::convert($this->wallets->first()->money) : $this->wallets->first()->money;
    // }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    /**
     * The achievements that belong to the user.
     */
    public function achievements()
    {
        return $this->belongsToMany('App\Models\Achievement')
            ->with('badge')
            ->withTimestamps();
    }

    /**
     * The stats that belong to the user.
     */
    public function stats()
    {
        return $this->hasOne('App\Models\Stats');
    }

    /**
     * Carteira que pertence ao jogador (dinheiro)
     */
    public function wallet()
    {
        return $this->hasOne('App\Models\Wallet');
    }

    /**
     * Conta do banco que pertence ao jogador
     */
    public function account()
    {
        return $this->hasOne('App\Models\Account');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
