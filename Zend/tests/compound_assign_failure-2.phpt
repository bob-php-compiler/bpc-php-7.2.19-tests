--TEST--
Behavior of failing compound assignment
--INI--
opcache.optimization_level=0
--FILE--
<?php

try {
	$a = 1;
	$a >>= -1;
} catch (Error $e) { var_dump($a); }

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Bit shift by negative number in %s on line %d
 -- compile-error
