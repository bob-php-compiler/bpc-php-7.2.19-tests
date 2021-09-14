--TEST--
errmsg: __isset() must take exactly 1 argument
--FILE--
<?php

class test {
	function __isset() {
	}
}

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to method test::__isset(): 1 required, 0 provided in %s on line %d
 -- compile-error
