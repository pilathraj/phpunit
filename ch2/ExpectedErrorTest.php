<?php
use PHPUnit\Framework\TestCase;

class ExpectedErrorTest extends TestCase
{
	
	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testFailingInclude(){
		include 'testing.csv';
		/* PHPUnit_Framework_Error_Notice and PHPUnit_Framework_Error_Warning represent PHP notices and warnings, respectively.  */
	}
}
?>