--TEST--
errmsg: __unset() must take exactly 1 argument
--FILE--
<?php

class test {
	function __unset() {
	}
}

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to method test::__unset(): 1 required, 0 provided in %s on line %d
 -- compile-error
