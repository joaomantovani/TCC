<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	    'name', 'type', 'color', 'created_at', 'updated_at'
	];

    /**
     * Get the achievement that owns the badge.
     */
    public function achievement()
    {
        return $this->hasMany('App\Models\Achievement');
    }
}