--TEST--
Test array_uintersect_uassoc() function : error conditions
--ARGS--
--bpc-include-file ext/standard/tests/array/compare_function.inc
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
$key_compare_func = 'compare_function';

$extra_arg = 10;


//Test array_uintersect_uassoc with one more than the expected number of arguments
echo "\n-- Testing array_uintersect_uassoc() function with more than expected no. of arguments --\n";
var_dump( array_uintersect_uassoc($arr1, $arr2, $data_compare_func, $key_compare_func, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** Testing array_uintersect_uassoc() : error conditions ***

-- Testing array_uintersect_uassoc() function with more than expected no. of arguments --

Warning: array_uintersect_uassoc() expects parameter 5 to be callable, 10 given in %sarray_uintersect_uassoc_error.php on line %d
NULL
===DONE===
