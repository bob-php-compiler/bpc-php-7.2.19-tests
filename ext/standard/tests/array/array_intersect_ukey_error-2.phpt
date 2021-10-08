--TEST--
Test array_intersect_ukey() function : error conditions
--FILE--
<?php
/* Prototype  : array array_intersect_ukey(array arr1, array arr2 [, array ...], callback key_compare_func)
 * Description: Computes the intersection of arrays using a callback function on the keys for comparison.
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_intersect_ukey() : error conditions ***\n";

// Testing array_intersect_ukey with no arguments
echo "\n-- Testing array_intersect_ukey() function with no arguments --\n";
var_dump( array_intersect_ukey() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_intersect_ukey(): 3 required, 0 provided in %s on line %d
 -- compile-error
