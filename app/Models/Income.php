<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    protected $table = 'yields';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['old_money', 'new_money', 'description'];
    // protected $hidden = [];
    // protected $dates = [];

    //Porcentagem que rende por dia
    // protected $juros_bancarios = 0.01;
    
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }

    public function sameMoney()
    {
        return $this->old_money == $this->new_money ? true : false;
    }

    public function moreMoney()
    {
        return $this->old_money < $this->new_money ? true : false;
    }

    public function lessMoney()
    {
        return $this->old_money > $this->new_money ? true : false;
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
