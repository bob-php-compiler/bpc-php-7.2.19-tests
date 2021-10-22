--TEST--
Test wrong number of arguments for sinh()
--FILE--
<?php
/*
 * proto float sinh(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(sinh());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sinh(): 1 required, 0 provided in %s on line %d
 -- compile-error
