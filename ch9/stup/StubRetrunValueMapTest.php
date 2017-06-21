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


class StubReturnValueMap extends TestCase
{
	public function testStub()
	{
		$stub = $this->createMock(Sample::class);
		
		$map = [
			['a', 'b', 'c', 'd'],
			['e', 'f', 'g', 'h']
		];
		
		$stub->method('dosomething')
			 ->will($this->returnValueMap($map));
		
		
		
		$this->assertEquals('d', $stub->doSomething('a', 'b', 'c'));
		$this->assertEquals('h', $stub->doSomething('e', 'f', 'g'));
	}
	
}

?>