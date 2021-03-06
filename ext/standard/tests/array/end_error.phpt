--TEST--
Test end() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : mixed end(array $array_arg)
 * Description: Advances array argument's internal pointer to the last element and return it
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to end() to test behaviour
 */

echo "*** Testing end() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing end() function with Zero arguments --\n";
var_dump( end() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function end(): 1 required, 0 provided in %s on line %d
 -- compile-error
