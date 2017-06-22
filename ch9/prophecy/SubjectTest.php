<?php
use PHPUnit\Framework\TestCase;

include("..\Subject.php");

class SubjectTest extends TestCase
{
	public function testSubject()
	{
		$subject = new Subject('My subject');
		
		// Create a prophecy for the Observer class.
        $observer = $this->prophesize(Observer::class);
		
		echo '<pre>';
		print_r(get_class_methods($observer));
		echo '</pre>';
	}
		
}
?>