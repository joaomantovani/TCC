<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerClass extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'id';
    protected $fillable = [];

    public function getTotalNumber()
    {
        return 22;
    }

    public function info()
    {
        return $this->hasMany('App\Models\Info', 'class_id', 'player_class_id');
    }  
    
    public function getDisadvantagesAttribute($value)
    {
        return explode(';', $value);
    }

    public function getAdvantagesAttribute($value)
    {
        return explode(';', $value);
    }

    public function getShortNameAttribute($value)
    {
        return strtoupper($value);
    }
}
