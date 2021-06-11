--TEST--
ZE2 __toString() in __destruct
--FILE--
<?php

class Test
{
	function __toString()
	{
		return "Hello\n";
	}

	function __destruct()
	{
		echo $this;
	}
}

$o = new Test;
$o = NULL;

$o = new Test;

?>
====DONE====
--EXPECTF--
Warning: in %s line 10: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

====DONE====
Hello
Hello
