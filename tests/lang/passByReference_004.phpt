--TEST--
passing the return value from a function by reference
--FILE--
<?php

function foo(&$ref)
{
	var_dump($ref);
}

function bar($value)
{
	return $value;
}

foo(bar(5));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Only variables can be passed by reference in %s on line 13
 -- compile-error
