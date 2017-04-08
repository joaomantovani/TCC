<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'slug', 'exp', 'badge_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'badge_id'
    ];

    /**
     * The users that belong to the achievement.
     */
    public function users()
    {
        return $this->belongsToMany('App\User')
            ->withTimestamps();
    }

    /**
     * Get the badge record associated with the achievement.
     */
    public function badge()
    {
        return $this->belongsTo('App\Models\Badge');
    }
}
