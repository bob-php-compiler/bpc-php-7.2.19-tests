--TEST--
Test wrong number of arguments for tanh()
--FILE--
<?php
/*
 * proto float tanh(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(tanh());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function tanh(): 1 required, 0 provided in %s on line %d
 -- compile-error
