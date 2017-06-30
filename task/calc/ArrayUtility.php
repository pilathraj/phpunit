<?php
class ArrayUtility
{
  
  public function array_sum($arr){
	$sum = 0;
	foreach($arr as $v)
		$sum += $v;
	return $sum;
  }
  
  public function in_array($arr){
	return true;
  }
  
  

}
