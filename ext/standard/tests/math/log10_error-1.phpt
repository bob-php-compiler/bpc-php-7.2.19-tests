--TEST--
Test wrong number of arguments for log10()
--INI--
precision = 14
--FILE--
<?php
/*
 * proto float log10(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(log10());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function log10(): 1 required, 0 provided in %s on line %d
 -- compile-error
