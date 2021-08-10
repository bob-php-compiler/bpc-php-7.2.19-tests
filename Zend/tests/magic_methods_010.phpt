--TEST--
Testing __toString() declaration with wrong modifier
--FILE--
<?php

class a {
	static protected function __toString() {
	}
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: The magic method a::__tostring() must have public visibility in %s on line %d
 -- compile-error
