<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'name', 'description', 'slug', 'exp', 'badge_id'
    ];

    protected $hidden = [
        'badge_id'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User')
            ->withTimestamps();
    }

    public function badge()
    {
        return $this->belongsTo('App\Models\Badge');
    }
}
