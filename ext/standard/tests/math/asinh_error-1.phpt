--TEST--
Test wrong number of arguments for asinh()
--FILE--
<?php
/*
 * proto float asinh(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(asinh());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function asinh(): 1 required, 0 provided in %s on line %d
 -- compile-error
