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


class StubSampleTest extends TestCase
{
	public function testStub(){
		// Create a stub for the SomeClass class.
		
		$stub = $this->createMock(Sample::class);
		/*echo '<pre>';
		print_r($stub);
		print_r(get_class_methods($stub));
		echo '</pre>';*/
		
		// Configure the stub.
		$stub->method('doSomething2')
			->willReturn('foo');
		$stub->method('doSomething')
			->willReturn('foo'); /* If the original class does declare a method named "method" then $stub->expects($this->any())->method('doSomething')->willReturn('foo'); has to be used. */
		
		$this->assertEquals(NULL, $stub->doSomething());
		$this->assertEquals('foo', $stub->doSomething2());
	}
}	
?>