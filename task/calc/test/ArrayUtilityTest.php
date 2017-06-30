<?php
use PHPUnit\Framework\TestCase;
include('D:/xampp/htdocs/phpunit/task/calc/ArrayUtility.php');
class ArrayUtilityTest extends TestCase
{
  private $arrUtility;
  public function setUp()
  {
	if(is_null($this->arrUtility))
		$this->arrUtility = new ArrayUtility();
  }
  
  public function testarray_sum()
  {
	$this->assertTrue(true);
	$this->assertEquals(100, $this->arrUtility->array_sum([50,50]));
  }
  
  public function testarrayin(){
		$obj = new ArrayUtility();
		$this->assertFalse($obj->in_array([]));
	}
  
  public function tearDown()
  {
	$this->arrUtility = null;
  } 

}
