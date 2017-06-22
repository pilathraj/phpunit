<?php
use PHPUnit\Framework\TestCase;

class IdenticalObjectCloneTest extends TestCase
{
	public function testIdenticalObjectClone()
	{
		 $cloneArguments = true;

        $mock = $this->getMockBuilder(stdClass::class)
                     ->enableArgumentCloning()
                     ->getMock();
		$mock1 = clone $mock;
	}
}
?>