--TEST--
Testing __set implementation with wrong declaration
--FILE--
<?php

abstract class b {
	abstract function __set($a, $b);
}

class a extends b {
	private function __set($a, $b) {
	}
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: The magic method a::__set() must have public visibility in %s on line %d
 -- compile-error
