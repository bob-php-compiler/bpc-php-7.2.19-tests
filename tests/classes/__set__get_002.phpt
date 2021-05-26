--TEST--
ZE2 __get() signature check
--FILE--
<?php
class Test {
	function __get($x,$y) {
	}
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to method Test::__get(): 1 at most, 2 provided in %s__set__get_002.php on line %d
 -- compile-error
