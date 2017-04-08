<?php

namespace App\Helpers;

/**
* Class para tratar assuntos de dinheiro
*/
class Money
{
	/**
	 * Function which takes the integer value and returns the short form like 1k, 1M and 1B. 
	 * @param  string  $money     [the value to be converted]
	 * @param  integer $precision [It limits the result to limited decimal points. The default decimal point is one.]
	 * @return [float]             [the converted number]
	 */
	public static function convert($money = '', $precision = 1)
	{	
		if ($money >= 1000 && $money < 1000000)
			$money_formated = number_format( $money / 1000, $precision) . 'K';
		else if ($money >= 1000000 && $money < 1000000000)
			$money_formated = number_format( $money / 1000000, $precision) . 'M';
		else if ($money >= 1000000000)
			$money_formated = number_format( $money / 1000000000, $precision) . 'B';
		else
			$money_formated = $money;

		return $money_formated;
	}
}