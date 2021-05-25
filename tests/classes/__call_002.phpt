--TEST--
ZE2 __call() signature check
--FILE--
<?php

class Test {
	function __call() {
	}
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to method Test::__call(): 2 required, 0 provided in %s__call_002.php on line %d
 -- compile-error
