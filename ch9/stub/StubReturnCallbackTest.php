<?php
use PHPUnit\Framework\TestCase;

class Sample
{
	
	public function doSomething(){
	}
}

class StubReturnCallbackTest extends TestCase
{
	public function testStub(){
		$stub = $this->createMock(Sample::class);
		
		$stub->method('doSomething')
			->will($this->returnCallback('str_rot13'));
			
		// $stub->doSomething($argument) returns str_rot13($argument)
		/* str_rot13 is a core php function shifts every letter by 13 places in the alphabet while leaving non-alpha characters untouched */
        $this->assertEquals('fbzrguvat', $stub->doSomething('something'));
	}
}
?>