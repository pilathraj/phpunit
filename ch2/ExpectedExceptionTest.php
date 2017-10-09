<?php
use PHPUnit\Framework\TestCase;

class ExpectedExceptionTest extends TestCase
{
	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testException(){
    #testing(324234);  # uncomment for success 
	}
}

function testing(){
  throw new InvalidArgumentException('InvalidArgumentException');
}
?>