--TEST--
Test wrong number of arguments for atanh()
--FILE--
<?php
/*
 * proto float atanh(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(atanh());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function atanh(): 1 required, 0 provided in %s on line %d
 -- compile-error
