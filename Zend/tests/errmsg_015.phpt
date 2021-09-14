--TEST--
errmsg: __clone() cannot accept any arguments
--FILE--
<?php

class test {
	function __clone($var) {
	}
}

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to method test::__clone(): 0 at most, 1 provided in %s on line %d
 -- compile-error
