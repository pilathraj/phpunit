<?php
use PHPUnit\Framework\TestCase;
/*
Type	   Possible Values	                                  Examples	                                            Another example
PHP	       Any PHP version identifier	                      @requires PHP 5.3.3	                                @requires PHP 7.1-dev
PHPUnit	   Any PHPUnit version identifier                     @requires PHPUnit 3.6.3	                            @requires PHPUnit 4.6
OS	       A regexp matching PHP_OS	                          @requires OS Linux	                                @requires OS WIN32|WINNT
function   Any valid parameter to function_exists	          @requires function imap_open	                        @requires function ReflectionMethod::setAccessible
extension  Any extension name along with an optional 	      @requires extension mysqli	                        @requires extension redis 2.2.0
		   version identifier
*/
class SampleRequiredSkipTest extends TestCase
{
	/**
	 * @requires PHP 7.2.0
	 */
	public function testConnection()
	{
		$this->assertTrue(true);
	}		
}
?>