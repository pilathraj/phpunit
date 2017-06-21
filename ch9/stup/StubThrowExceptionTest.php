<?php
use PHPUnit\Framework\TestCase;

class Sample
{
	public function doSomething()
	{
		// do something
	}
}


class StubThrowExceptionTest extends TestCase
{
	public function testStub()
	{
		$stub = $this->createMock(Sample::class);
		
		$stub->method('doSomething')
			->will($this->throwException(new Exception()));
			
		$stub->doSomething();
	}
}

	
https://github.com/mreschke?tab=repositories
?>