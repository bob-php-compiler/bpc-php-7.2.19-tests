--TEST--
Bug #29368 (The destructor is called when an exception is thrown from the constructor)
--FILE--
<?php

class Foo
{
	function __construct()
	{
		echo __METHOD__ . "\n";
		throw new Exception;
	}
	function __destruct()
	{
		echo __METHOD__ . "\n";
	}
}

try
{
	$bar = new Foo;
} catch(Exception $exc)
{
	echo "Caught exception!\n";
}

unset($bar);

?>
===DONE===
--EXPECTF--
Warning: in %s line 10: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Foo::__construct
Caught exception!
===DONE===
