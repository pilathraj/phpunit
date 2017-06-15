<?php
use PHPUnit\Framework\TestCase;

class DataProviderTest extends TestCase
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
			[1, 1, 2],
			[1, 5, 6],
			[1, 7, 9],
			[1, 7, 8],
		];
	}
	
	
}
?>