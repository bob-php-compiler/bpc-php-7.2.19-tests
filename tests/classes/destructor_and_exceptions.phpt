--TEST--
ZE2 catch exception thrown in destructor
--FILE--
<?php

class FailClass
{
	public $fatal;

	function __destruct()
	{
		echo __METHOD__ . "\n";
		throw new exception("FailClass");
		echo "Done: " . __METHOD__ . "\n";
	}
}

try
{
	$a = new FailClass;
	unset($a);
}
catch(Exception $e)
{
	echo "Caught: " . $e->getMessage() . "\n";
}

class FatalException extends Exception
{
	function __construct($what)
	{
		echo __METHOD__ . "\n";
		$o = new FailClass;
		unset($o);
		echo "Done: " . __METHOD__ . "\n";
	}
}

try
{
	throw new FatalException("Damn");
}
catch(Exception $e)
{
	echo "Caught Exception: " . $e->getMessage() . "\n";
}
catch(FatalException $e)
{
	echo "Caught FatalException: " . $e->getMessage() . "\n";
}

?>
===DONE===
--EXPECTF--
Warning: in %s line 7: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

FatalException::__construct
Done: FatalException::__construct
Caught Exception: 
===DONE===
FailClass::__destruct
FailClass::__destruct

Fatal error: Uncaught Exception: FailClass in %sdestructor_and_exceptions.php:10
Stack trace:
#0 %sdestructor_and_exceptions.php(51): FailClass->__destruct()
#1 {main}

Next Exception: FailClass in %sdestructor_and_exceptions.php:10
Stack trace:
#0 %sdestructor_and_exceptions.php(51): FailClass->__destruct()
#1 {main}
  thrown in %sdestructor_and_exceptions.php on line 51
