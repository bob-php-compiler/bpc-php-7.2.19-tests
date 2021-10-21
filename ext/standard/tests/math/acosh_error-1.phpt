--TEST--
Test wrong number of arguments for acosh()
--FILE--
<?php
/*
 * proto float acosh(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(acosh());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function acosh(): 1 required, 0 provided in %s on line %d
 -- compile-error
