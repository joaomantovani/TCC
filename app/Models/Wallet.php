<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Money;

class Wallet extends Model
{
	protected $fillable = ['name', 'type', 'money'];
	protected $hidden = ['type'];
	
	public function getMoney($money = null)
	{
	    return is_null($money) ? Money::convert(round($this->money)) : Money::convert(round($money));
	}
	
	public function user()
	{
	    return $this->belongsTo('App\Models\User');
	}
}
