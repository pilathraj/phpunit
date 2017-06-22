<?php
use PHPUnit\Framework\TestCase;

include('Subject.php');
class MockComplexArgumentTest extends TestCase
{
	public function testErrorReported()
	{
		$observer =  $this->getMockBuilder(Observer::class)
				->setMethods(['reportError'])
				->getMock();
		$observer->expects($this->once())
                 ->method('reportError')
                 ->with($this->greaterThan(0),
                        $this->stringContains('Something'),
                        $this->callback(function($subject){
                          return is_callable([$subject, 'getName']) &&
                                 $subject->getName() == 'My subject';
                        }));

        $subject = new Subject('My subject');
        $subject->attach($observer);

        // The doSomethingBad() method should report an error to the observer
        // via the reportError() method
        $subject->doSomethingBad();
	}		
}
?>