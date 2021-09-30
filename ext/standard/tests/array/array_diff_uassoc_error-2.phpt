--TEST--
Test array_diff_uassoc() function : error conditions
--FILE--
<?php
/* Prototype  : array array_diff_uassoc(array arr1, array arr2 [, array ...], callback key_comp_func)
 * Description: Computes the difference of arrays with additional index check which is performed by a
 * 				user supplied callback function
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_diff_uassoc() : error conditions ***\n";

// Testing array_diff_uassoc with no arguments
echo "\n-- Testing array_diff_uassoc() function with no arguments --\n";
var_dump( array_diff_uassoc() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_diff_uassoc(): 3 required, 0 provided in %s on line %d
 -- compile-error
