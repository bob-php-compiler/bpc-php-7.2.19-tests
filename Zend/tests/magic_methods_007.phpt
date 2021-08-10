--TEST--
Testing __set() declaration in abstract class with wrong modifier
--FILE--
<?php

abstract class b {
	abstract protected function __set($a, $b);
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: The magic method b::__set() must have public visibility in %s on line %d
 -- compile-error
