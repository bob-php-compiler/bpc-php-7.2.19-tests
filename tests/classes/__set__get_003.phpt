--TEST--
ZE2 __set() signature check
--FILE--
<?php
class Test {
	function __set() {
	}
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to method Test::__set(): 2 required, 0 provided in %s__set__get_003.php on line %d
 -- compile-error
