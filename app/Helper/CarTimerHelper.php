<?php

namespace App\Helper;

use Carbon\Carbon;


class CarTimerHelper
{
	public static function carTimer($min)
	{
		/**Simple validation to check if params are int and in range of 1-999**/
		if($min < 1 || $min > 999 || filter_var($min, FILTER_VALIDATE_INT) === false){
			return false;
		}
		$startTime = "00:00";
		/**Using Carbon to get current time from start time and minutes passed**/
	    $time = Carbon::parse($startTime)->addMinutes($min)->format("H:i");
	    /**Splitting string into an array**/
	    $newArr = str_split($time);
	    /**Remove ':' from array using array_diff() and add the rest array elements**/
	    $sum = array_sum(array_diff($newArr, [":"]));
	    
	    return ['current_time'=>$time, 'sumofdigits'=>$sum];
	}
}

?>