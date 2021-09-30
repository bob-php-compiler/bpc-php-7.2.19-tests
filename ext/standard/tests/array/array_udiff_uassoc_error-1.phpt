--TEST--
Test array_udiff_uassoc() function : error conditions
--FILE--
<?php
/* Prototype  : array array_udiff_uassoc(array arr1, array arr2 [, array ...], callback data_comp_func, callback key_comp_func)
 * Description: Returns the entries of arr1 that have values which are not present in any of the others arguments but do additional checks whether the keys are equal. Keys and elements are compared by user supplied functions.
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_udiff_uassoc() : error conditions ***\n";


$arr1 = array(1, 2);
$arr2 = array(1, 2);

// Testing array_udiff_uassoc with one less than the expected number of arguments
echo "\n-- Testing array_udiff_uassoc() function with less than expected no. of arguments --\n";
var_dump( array_udiff_uassoc($arr1, $arr2, 'compare_function') );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_udiff_uassoc(): 4 required, 3 provided in %s on line %d
 -- compile-error
