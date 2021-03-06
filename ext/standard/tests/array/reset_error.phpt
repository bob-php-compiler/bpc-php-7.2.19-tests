--TEST--
Test reset() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : mixed reset(array $array_arg)
 * Description: Set array argument's internal pointer to the first element and return it
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to reset() to test behaviour
 */

echo "*** Testing reset() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing reset() function with Zero arguments --\n";
var_dump( reset() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function reset(): 1 required, 0 provided in %s on line %d
 -- compile-error
