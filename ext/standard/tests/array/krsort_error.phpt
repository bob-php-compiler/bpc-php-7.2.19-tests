--TEST--
Test krsort() function : error conditions
--FILE--
<?php
/* Prototype  : bool krsort(array &array_arg [, int asort_flags])
 * Description: Sort an array
 * Source code: ext/standard/array.c
*/

/*
* Testing krsort() function with all possible error conditions
*/

echo "*** Testing krsort() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing krsort() function with zero arguments --\n";
var_dump( krsort() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function krsort(): 1 required, 0 provided in %s on line %d
 -- compile-error
