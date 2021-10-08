--TEST--
Test array_uintersect_uassoc() function : error conditions
--ARGS--
--bpc-include-file ext/standard/tests/array/compare_function.inc \
--FILE--
<?php
/* Prototype  : array array_uintersect_uassoc(array arr1, array arr2 [, array ...], callback data_compare_func, callback key_compare_func)
 * Description: Returns the entries of arr1 that have values which are present in all the other arguments. Keys are used to do more restrictive check. Both data and keys are compared by using user-supplied callbacks.
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_uintersect_uassoc() : error conditions ***\n";

$arr1 = array(1, 2);
$arr2 = array(1, 2);

include('compare_function.inc');
$data_compare_func = 'compare_function';

// Testing array_uintersect_uassoc with one less than the expected number of arguments
echo "\n-- Testing array_uintersect_uassoc() function with less than expected no. of arguments --\n";
var_dump( array_uintersect_uassoc($arr1, $arr2, $data_compare_func) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_uintersect_uassoc(): 4 required, 3 provided in %s on line %d
 -- compile-error
