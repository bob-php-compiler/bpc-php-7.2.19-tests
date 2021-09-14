--TEST--
errmsg: __destruct() cannot take arguments
--FILE--
<?php

class test {
	function __destruct($var) {
	}
}

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to method test::__destruct(): 0 at most, 1 provided in %s on line %d
 -- compile-error
