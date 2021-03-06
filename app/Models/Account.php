<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Money;

use App\Models\Income;

class Account extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    // protected $table = 'accounts';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'money'];
    // protected $hidden = [];
    // protected $dates = [];

    //Porcentagem que rende por dia
    protected $juros_bancarios = 0.01;
    
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function calcJuros($value='')
    {
        $old_money = $this->money;

        $this->money += $this->money * 0.01;
        $new_money = $this->money;
        
        //Calcula o juros
        \Log::debug('old_money:' . $old_money);

        $yield = new Income([
            'old_money' => $old_money, 
            'new_money' => $new_money, 
            'description' => 'rendimento'
        ]);

        $this->incomes()->save($yield);
        $this->save();
    }
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function incomes()
    {
        return $this->hasMany('App\Models\Income');
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
    /**
     * Get the money converted.
     *
     * @param  string  
     * @return string
     */
    public function getConvertedMoney()
    {
        return $this->money >= 1000 ? Money::convert($this->money) : round($this->money);
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
