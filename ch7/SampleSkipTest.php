<?php
use PHPunit\Framework\TestCase;

/* run phpunit --verbose SampleSkipTest.php */

class SampleSkipTest extends TestCase
{
	protected function setUp(){
		if(!extension_loaded('mysqlie')){
			$this->markTestSkipped(
			'The MySQLi extension is not available'
			);
		}
	}
	
	public function testConnection()
	{
		$this->assertTrue((bool)1);
		
	}	
	
}


?>