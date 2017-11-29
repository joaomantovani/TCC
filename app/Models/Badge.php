<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
	protected $fillable = [
	    'name', 'type', 'color', 'created_at', 'updated_at'
	];

    public function achievement()
    {
        return $this->hasMany('App\Models\Achievement');
    }
}