--TEST--
Behavior of failing compound assignment
--INI--
opcache.optimization_level=0
--FILE--
<?php

try {
	$a = 1;
	$a %= 0;
} catch (Error $e) { var_dump($a); }

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Modulo by zero in %s on line %d
 -- compile-error
