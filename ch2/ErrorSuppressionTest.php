<?php
use PHPUnit\Framework\TestCase;

class ErrorSuppressionTest extends TestCase
{
	public function testFileWriting(){
		$writer = new FileWriter();
		$this->assertFalse(@$writer->write('somefile/aaa/','some content')); 
		#$this->assertFalse($writer->write('somefile/aaa/','some content')); 
		
	}
}

class FileWriter
{
	public function write($file, $content)
	{
		$fh = fopen($file, 'w');		
		if($fh == false){
			return false;
		}
	}
	
}