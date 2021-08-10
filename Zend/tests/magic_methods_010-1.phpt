--TEST--
Testing __toString() declaration with wrong modifier
--FILE--
<?php

class a {
	static protected function __toString($a, $b) {
	}
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to method a::__toString(): 0 at most, 2 provided in %s on line %d
 -- compile-error
