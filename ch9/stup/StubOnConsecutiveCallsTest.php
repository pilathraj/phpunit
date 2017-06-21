<?php
use PHPUnit\Framework\TestCase;

class Sample
{
	public function doSomething()
	{
	}
}

class StubOnConsecutiveCallsTest extends TestCase
{
	public function testStub()
	{
		$stub = $this->createMock(Sample::class);
		
		$stub->method('doSomething')
			->will($this->onConsecutiveCalls(2,3,4,5));
		
		$this->assertEquals(2, $stub->doSomething());
		$this->assertEquals(3, $stub->doSomething());
		$this->assertEquals(4, $stub->doSomething());
		$this->assertEquals(5, $stub->doSomething());
		$this->assertEquals(null, $stub->doSomething());
		#$this->assertEquals(2, $stub->doSomething());  /* Failed null will */ 
	}
}


?>