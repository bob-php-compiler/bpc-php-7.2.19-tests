--TEST--
Test wrong number of arguments for min()
--FILE--
<?php
/*
 * proto mixed min(mixed arg1 [, mixed arg2 [, mixed ...]])
 * Function is implemented in ext/standard/array.c
*/


echo "\n*** Testing Error Conditions ***\n";

var_dump(min());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function min(): 1 required, 0 provided in %s on line %d
 -- compile-error
