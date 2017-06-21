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

class MockBuilderStupTest extends TestCase
{
	public function testStup(){
		// Create a stub for the SomeClass class.
		 $stub = $this->getMockBuilder("Sample")
                     ->disableOriginalConstructor()
                     ->disableOriginalClone()
                     ->disableArgumentCloning()
                     ->disallowMockingUnknownTypes()
                     ->getMock();
					 
		/* echo '<pre>';
		print_r($stub);
		print_r(get_class_methods($stub));
		echo '</pre>'; */
					 
		
        // Configure the stub.
        $stub->method('doSomething')
             ->willReturn('foo');

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
	}
}
?>