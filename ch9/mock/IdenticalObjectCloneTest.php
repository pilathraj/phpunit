<?php
use PHPUnit\Framework\TestCase;

class IdenticalObjectCloneTest extends TestCase
{
	public function testIdenticalObjectClone()
	{
		 $cloneArguments = true;

        $mock = $this->getMockBuilder(stdClass::class)
                    ->setMethods(['foo'])
                     ->enableArgumentCloning()
                     ->getMock();
        /*  expects testing  */              
      $mock->expects($this->once())
			->method('foo')
			->with($this->equalTo('something'));
      
		$mock1 = clone $mock;
    $mock1->foo('something');
	}
}
?>