<?php
use PHPUnit\Framework\TestCase;

class DataProviderNamedDataSetsTest extends TestCase
{
	
	/**
	 *	@dataProvider additionData
	 */
	public function testAdd($a=0, $b=1, $expected=1){
		$this->assertEquals($expected, ($a+$b));
	}
	
	public function additionData()
	{
		return [
			"One plus One"=>[1, 1, 2],
			"One plus six"=>[1, 5, 6],
			"One plus Seven"=>[1, 7, 9],
			"One plus Seven_1"=>[1, 7, 8],
		];
	}
	
	
}
?>