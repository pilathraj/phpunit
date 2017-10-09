<?php
namespace TestNamespace;
use PHPUnit\Framework\TestCase;



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