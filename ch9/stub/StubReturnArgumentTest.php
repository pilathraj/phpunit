<?php
use PHPUnit\Framework\TestCase;

class  Sample
{
	public function doSomething()
	{
		/* do to something */
	}
	
	public function doSomething2()
	{
		/* do to something */
	}
}


class StubReturnArgumentTest extends TestCase
{
	public function testStubReturnArgument(){
		
		$stub = $this->createMock(Sample::class);
		
		$stub->method('dosomething')
			->will($this->returnArgument(0));
			
		$this->assertEquals('foo', $stub->dosomething('foo'));
		$this->assertEquals('bar', $stub->dosomething('bar'));
	}
}
?>
