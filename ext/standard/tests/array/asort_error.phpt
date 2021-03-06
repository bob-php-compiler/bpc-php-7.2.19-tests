--TEST--
Test asort() function : error conditions
--FILE--
<?php
/* Prototype  : bool asort(array &array_arg [, int sort_flags])
 * Description: Sort an array
 * Source code: ext/standard/array.c
*/

/*
* Testing asort() function with all possible error conditions
*/

echo "*** Testing asort() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing asort() function with Zero arguments --\n";
var_dump( asort() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function asort(): 1 required, 0 provided in %s on line %d
 -- compile-error
