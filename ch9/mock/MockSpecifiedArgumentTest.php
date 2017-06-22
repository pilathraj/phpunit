<?php
use PHPUnit\Framework\TestCase;
class MockSpecifiedArgumentTest extends TestCase
{
	public function testFunctionCalledTwoTimesWithSpecificArguments()
    {
		$observer = $this->getMockBuilder(Observer::class)
					->setMethods(['set'])
					->getMock();
		
		echo '<pre>';
		print_r(get_class_methods($observer));
		echo '</pre>';
		
		$observer->expects($this->exactly(2))
				->method('set')
				->withConsecutive(
				[$this->equalTo('foo'), $this->greaterThan(0)],
				[$this->equalTo('bar'), $this->greaterThan(0)]);
				
		$observer->set('foo', 1);
		$observer->set('bar', 1);
		//$observer->set('bar', 1);   Only 2 call allow.
	}
}

?>