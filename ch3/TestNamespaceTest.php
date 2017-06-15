<?php
use PHPUnit\Framework\TestCase;


namespace TestNamespace;

class TestNamespace extends TestCase
{   
	/**
	 * @dataProvider provider
	 */
	public function testMethod($data)
	{
		$this->assertTrue($data);
	}
	
	public function provider()
	{
		return [
			[true],
			[true]
		];
	}
		
}

?>