<?php
use PHPUnit\Framework\TestCase;

class StackTestDepends extends TestCase
{
	public function testEmpty()
	{
		$stack = [];
		$this->assertEmpty($stack);
		return $stack;
	}
	
	/**
	  *@depends testEmpty
	  */	
	public function testPush(array $stack)
	{		
		array_push($stack, 1);
		$this->assertEquals(1, $stack[count($stack)-1]);
		#$this->assertEmpty($stack); PHPUnit skips that execution of a test when a depended-upon test has failed
		$this->assertNotEmpty($stack);
		return $stack;
	}
	
	/**
	  *@depends testPush
	  */
	public function testPop(array $stack)  /* Skipped  when testPush failed */
	{
		$this->assertEquals(1, array_pop($stack));
		$this->assertEmpty($stack);
	}
}
?>