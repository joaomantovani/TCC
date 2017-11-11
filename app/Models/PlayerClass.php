<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerClass extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    protected $table = 'classes';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function getTotalNumber()
    {
        return 22;
    }
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function info()
    {
        return $this->hasMany('App\Models\Info', 'class_id', 'player_class_id');
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
     * Transforma as desvantagens em array.
     *
     * @param  string  
     * @return string
     */
    public function getDisadvantagesAttribute($value)
    {
        return explode(';', $value);
    }

    /**
     * Transforma as vantagens em array.
     *
     * @param  string  
     * @return string
     */
    public function getAdvantagesAttribute($value)
    {
        return explode(';', $value);
    }

    /**
     * pega o nome pequeno
     *
     * @param  string  
     * @return string
     */
    public function getShortNameAttribute($value)
    {
        return strtoupper($value);
    }
    
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
