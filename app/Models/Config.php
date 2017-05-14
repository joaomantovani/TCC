<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PlayerClass;

class Config extends Model
{
	/**
	 * Retorna os stats iniciais da classe
	 */
    public static function getStats($class_id)
    {
    	$class = PlayerClass::find($class_id);

    	switch ($class->slug) {
    		case 'jogos-digitais': $prefix = 'JD'; break;
    		case 'seguranca': $prefix = 'SI'; break;
    		case 'ads': $prefix = 'ADS'; break;
    	}

    	$stats = [
    		'inteligence' => env($prefix . '_INITIAL_INTELIGENCE'),
    		'charisma' => env($prefix . '_INITIAL_CHARISMA'),
    		'audacity' => env($prefix . '_INITIAL_AUDACITY'),
    		'luck' => env($prefix . '_INITIAL_LUCK'),
    	];

    	return $stats;
    }
}
