<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'infos';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'class_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function class()
    {
        return $this->belongsTo('App\Models\PlayerClass');
    }
}
