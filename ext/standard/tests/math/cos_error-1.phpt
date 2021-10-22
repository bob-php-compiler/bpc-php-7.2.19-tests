--TEST--
Test wrong number of arguments for cos()
--FILE--
<?php
/*
 * proto float cos(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(cos());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function cos(): 1 required, 0 provided in %s on line %d
 -- compile-error
