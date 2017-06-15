<?php 
use PHPUnit\Framework\TestCase;

class DependencyFailureTest extends TestCase
{
	public function testOne(){
		$this->assertTrue(true);
		$this->assertEquals('foo','bar'); /* PHPUnit skips that execution of a test when a depended-upon test has failed */
	}
	
	/**
	  *@depends testOne
	  */
	public function testTwo(){
		
	}
}
?>