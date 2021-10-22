--TEST--
Test wrong number of arguments for cosh()
--FILE--
<?php
/*
 * proto float cosh(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(cosh());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function cosh(): 1 required, 0 provided in %s on line %d
 -- compile-error
