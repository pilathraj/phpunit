<?php
use PHPUnit\Framework\TestCase;

class DependencyAndDataProviderComboTest extends TestCase
{
	public function provider(){
		return [
			['Provider1'],
			['Provider2']
		];
	}
	
	public function testProducerFirst()
	{
		$this->assertTrue(true);
		return 'First';
	}
	
	public function testProducerSecond()
	{	
		$this->assertFalse(false);
		return 'Second';
	}
	
	/**
	 * @dataProvider provider
	 * @depends testProducerFirst
	 * @depends testProducerSecond
	 */
	public function testConsumer(){
		
		$this->assertEquals(
			['Provider2', 'First','Second'],
			func_get_args()
		);
		
	}
	
}
?>