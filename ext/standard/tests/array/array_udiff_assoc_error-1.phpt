--TEST--
Test array_udiff_assoc() function : error conditions
--FILE--
<?php
/* Prototype  : array array_udiff_assoc(array arr1, array arr2 [, array ...], callback key_comp_func)
 * Description: Returns the entries of arr1 that have values which are not present in any of the others arguments but do additional checks whether the keys are equal. Keys are compared by user supplied function.
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_udiff_assoc() : error conditions ***\n";

// Testing array_udiff_assoc with one less than the expected number of arguments
echo "\n-- Testing array_udiff_assoc() function with less than expected no. of arguments --\n";
var_dump( array_udiff_assoc($arr1, $arr2) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_udiff_assoc(): 3 required, 2 provided in %s on line %d
 -- compile-error
