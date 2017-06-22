<?php 
class Observer
{
	public function update($argument)
	{
		// do something
	}
	
	public function reportError($errorCode, $errorMessage, Subject $subject)
	{
		// do something
		var_dump($errorCode);
	}
		
}
?>