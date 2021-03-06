--TEST--
Test rsort() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : bool rsort(array &$array_arg [, int $sort_flags])
 * Description: Sort an array in reverse order
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to rsort() to test behaviour
 */

echo "*** Testing rsort() : error conditions ***\n";

// zero arguments
echo "\n-- Testing rsort() function with Zero arguments --\n";
var_dump( rsort() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function rsort(): 1 required, 0 provided in %s on line %d
 -- compile-error
