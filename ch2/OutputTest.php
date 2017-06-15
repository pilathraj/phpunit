<?php
use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
	public function testFooString()
	{
		$this->expectOutputString('foo');
		print 'foo';
	}
	
	public function testBarString()
	{
		$this->expectOutputString('foo');
		print 'bar';
	}
}
?>