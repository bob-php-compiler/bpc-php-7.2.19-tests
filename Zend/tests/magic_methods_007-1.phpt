--TEST--
Testing __set() declaration in abstract class with wrong modifier
--FILE--
<?php

abstract class b {
	abstract protected function __set($a);
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to method b::__set(): 2 required, 1 provided in %s on line %d
 -- compile-error
