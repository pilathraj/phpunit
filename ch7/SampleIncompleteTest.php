<?php
use PHPUnit\Framework\TestCase;

class SampleIncompleteTest extends TestCase
{
	public function testNonthing()
	{
		$this->assertTrue(true, 'This should already work.');
		$this->markTestIncomplete(" The test hasn't implemented yet.");
	}
}
?>