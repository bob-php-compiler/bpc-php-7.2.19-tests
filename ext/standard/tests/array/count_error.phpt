--TEST--
Test count() function : error conditions - pass incorrect number of args
--FILE--
<?php
/* Prototype  : int count(mixed var [, int mode])
 * Description: Count the number of elements in a variable (usually an array)
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to count() to test behaviour
 */

echo "*** Testing count() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing count() function with Zero arguments --\n";
var_dump( count() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function count(): 1 required, 0 provided in %s on line %d
 -- compile-error
