--TEST--
Catching an exception in a constructor fired form a static method
--FILE--
<?php

class MyObject
{
	function fail()
	{
		throw new Exception();
	}

	function __construct()
	{
		self::fail();
		echo __METHOD__ . "() Must not be reached\n";
	}

	function __destruct()
	{
		echo __METHOD__ . "() Must not be called\n";
	}
}

try
{
	new MyObject();
}
catch(Exception $e)
{
	echo "Caught\n";
}

?>
===DONE===
--EXPECTF--
Warning: in %s line 16: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Caught
===DONE===
