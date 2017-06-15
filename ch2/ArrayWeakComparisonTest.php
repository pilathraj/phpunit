<?php
use PHPUnit\Framework\TestCase;

class ArrayWeakComparisonTest  extends TestCase
{
	public function testArrayEquals(){
		$this->assertEquals(
			[1,2,3],
			[1,'2',3,5]
		);
	}
}
 
?>