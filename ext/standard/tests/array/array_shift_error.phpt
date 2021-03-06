--TEST--
Test array_shift() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : mixed array_shift(array &$stack)
 * Description: Pops an element off the beginning of the array
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to array_shift() to test behaviour
 */

echo "*** Testing array_shift() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing array_shift() function with Zero arguments --\n";
var_dump( array_shift() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_shift(): 1 required, 0 provided in %s on line %d
 -- compile-error
