<?php
use PHPUnit\Framework\TestCase;

class IdenticalTest extends TestCase
{
	public function testIdentical()
	{
		$expectedObject = new stdClass;
		
		$mock = $this->getMockBuilder(stdclass::class)
				->setMethods(['foo'])
				->getMock();
		
		
		$mock->expects($this->once())
			->method('foo')
			->with($this->identicalTo($expectedObject));
			
		$mock->foo($expectedObject);
		
	}
}
?>

