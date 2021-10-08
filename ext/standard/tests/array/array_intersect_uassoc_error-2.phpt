--TEST--
Test array_intersect_uassoc() function : error conditions
--FILE--
<?php
/* Prototype  : array array_intersect_uassoc(array arr1, array arr2 [, array ...], callback key_compare_func)
 * Description: Computes the intersection of arrays with additional index check, compares indexes by a callback function
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_intersect_uassoc() : error conditions ***\n";

// Testing array_intersect_uassoc with no arguments
echo "\n-- Testing array_intersect_uassoc() function with no arguments --\n";
var_dump( array_intersect_uassoc() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_intersect_uassoc(): 3 required, 0 provided in %s on line %d
 -- compile-error
