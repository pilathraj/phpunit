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


class StubReturnSelfTest extends TestCase
{
	public function testStub()
	{
		$stub = $this->createMock('sample');
		
		$stub->method('dosomething')
			 ->will($this->returnSelf());
		
		
		$this->assertSame($stub, $stub->doSomething());
		
	}
}
?>