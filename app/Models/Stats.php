<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    protected $table = 'stats';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['user_id', 'level', 'exp', 'stamina', 'pression', 'inteligence', 'charisma', 'audacity', 'luck'];
    // protected $hidden = [];
    // protected $dates = [];
    
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function recoverStats() 
    {
        $this->setStaminaAttribute($this->stamina + (5 - ((( $this->pression / 2 ) / 10) * 0.9 )));
    }

    public function calcLevel()
    {
        return max([$this->inteligence, $this->charisma, $this->audacity, $this->luck]) + 2;
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function user()
    {
        return $this->belongsTo('app\User');
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
    /**
     * Fit the stamina between 0 and 100.
     *
     * @param  string  
     * @return void
     */
    public function setStaminaAttribute($value)
    {
        // Limit integer between 1 and 100
        $this->attributes['stamina'] = max(min($value, 100), 1);
    }

    /**
     * Fit the stamina between 0 and 100.
     *
     * @param  string  
     * @return void
     */
    public function setPressionAttribute($value)
    {
        // Limit integer between 1 and 100
        $this->attributes['pression'] = max(min($value, 100), 1);
    }
}
