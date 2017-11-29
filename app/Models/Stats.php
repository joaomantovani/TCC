<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $table = 'stats';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'level', 'exp', 'stamina', 'pression', 'inteligence', 'charisma', 'audacity', 'luck'];

    public function recoverStats() 
    {
        $this->setStaminaAttribute($this->stamina + (5 - ((( $this->pression / 2 ) / 10) * 0.9 )));
    }

    public function calcLevel()
    {
        return max([$this->inteligence, $this->charisma, $this->audacity, $this->luck]) + 2;
    }

    public function user()
    {
        return $this->belongsTo('app\User');
    }
    
    public function setStaminaAttribute($value)
    {
        // Limit integer between 1 and 100
        $this->attributes['stamina'] = max(min($value, 100), 1);
    }

    public function setPressionAttribute($value)
    {
        // Limit integer between 1 and 100
        $this->attributes['pression'] = max(min($value, 100), 1);
    }
}
