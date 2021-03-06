<?php
use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
	public function testException(){
   
    $this->expectException(InvalidArgumentException::class);
    #testing(324234);  # uncomment for success 
  	
		/* In addition to the expectException() method the expectExceptionCode(), expectExceptionMessage(), and expectExceptionMessageRegExp() methods exist to set up expectations for exceptions raised by the code under test.
		Alternatively, you can use the @expectedException, @expectedExceptionCode, @expectedExceptionMessage, and @expectedExceptionMessageRegExp annotations to set up expectations for exceptions raised by the code under test. */
	}
}

function testing(){
  throw new InvalidArgumentException('InvalidArgumentException');
}

?>