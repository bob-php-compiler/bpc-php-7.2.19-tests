--TEST--
Bug #74444 (multiple catch freezes in some cases)
--FILE--
<?php
class FooEx extends Exception {}
function foo()
{
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	echo '';
	try {
		throw new RuntimeException();
	} catch (FooEx  | RuntimeException $e) {
		echo 1;
	}
	echo 2;
}

foo();
--EXPECT--
12
