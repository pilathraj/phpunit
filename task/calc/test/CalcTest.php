<?php
use PHPUnit\Framework\TestCase;
$dir = getcwd();
$dir = str_replace('test', '', $dir);

#include($dir.'Calc.php');
include('D:/xampp/htdocs/phpunit/task/calc/Calc.php');




class CalcTest extends TestCase
{
	private $calc;
	public function setUp()
	{
		if(is_null($this->calc))
			$this->calc = new Calc();
	}
	
	public function tearDown()
	{
		$this->calc = null;
	}
	
	/**
	 * @dataProvider addDataProvider
	 */	
	public function testAdd($a, $b, $sum)
	{
		$this->assertEquals($sum, $this->calc->add($a, $b));		
		$this->assertTrue(true);		
	}
	
	/**
	 * @dataProvider subDataProvider
	 */	
	public function testSub($a, $b, $sub)
	{
		$this->assertEquals($sub, $this->calc->sub($a, $b));
	}
	
	/**
	 * @dataProvider divDataProvider
	 */	
	public function testDiv($a, $b, $div)
	{
		$this->assertEquals($div, $this->calc->div($a, $b));
	}
	
	/**
	 * @dataProvider modDataProvider
	 */	
	public function testMod($a, $b, $mod)
	{
		$this->assertEquals($mod, $this->calc->mod($a, $b));
	}
	
	/**
	 * @dataProvider mulDataProvider
	 */
	public function testMul($a, $b, $mul)
	{
		$this->assertEquals($mul, $this->calc->mul($a, $b));
		
	}
	
	
	public function addDataProvider()
	{
		return [
			[1,2,3],
			[1,3,4]		
		];
	}
	
	public function subDataProvider()
	{
		return [
			[3,2,1],
			[4,3,1]		
		];
	}
	
	public function divDataProvider()
	{
		return [
			[10,5,2],
			[10,2,5]		
		];
	}
	
	public function modDataProvider()
	{
		return [
			[10,5,0],
			[11,3,2]		
		];
	}
	
	public function mulDataProvider()
	{
		return [
			[10,5,50],
			[11,3,33]		
		];
	}
	
	
	
}