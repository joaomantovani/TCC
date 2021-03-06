<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Money;

class Wallet extends Model
{
	/*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/
	// protected $table = 'wallets';
	// protected $primaryKey = 'id';
	// public $timestamps = false;
	// protected $guarded = ['id'];
	protected $fillable = ['name', 'type', 'money'];
	protected $hidden = ['type'];
	// protected $dates = [];
	
	/*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/
	/**
	 * Get the money converted.
	 *
	 * @param  string  
	 * @return string
	 */
	public function getMoney($money = null)
	{
	    return is_null($money) ? Money::convert(round($this->money)) : Money::convert(round($money));
	}
	
	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
	public function user()
	{
	    return $this->belongsTo('App\Models\User');
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
}
