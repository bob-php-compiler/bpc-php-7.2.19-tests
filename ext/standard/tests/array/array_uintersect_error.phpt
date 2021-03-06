--TEST--
Test array_uintersect() function : error conditions
--ARGS--
--bpc-include-file ext/standard/tests/array/compare_function.inc
--FILE--
<?php
/* Prototype  : array array_uintersect(array arr1, array arr2 [, array ...], callback data_compare_func)
 * Description: Returns the entries of arr1 that have values which are present in all the other arguments. Data is compared by using an user-supplied callback.
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_uintersect() : error conditions ***\n";


//Test array_uintersect with one more than the expected number of arguments
echo "\n-- Testing array_uintersect() function with more than expected no. of arguments --\n";
$arr1 = array(1, 2);
$arr2 = array(1, 2);

include('compare_function.inc');
$data_compare_function = 'compare_function';

$extra_arg = 10;
var_dump( array_uintersect($arr1, $arr2, $data_compare_function, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** Testing array_uintersect() : error conditions ***

-- Testing array_uintersect() function with more than expected no. of arguments --

Warning: array_uintersect() expects parameter 4 to be callable, 10 given in %sarray_uintersect_error.php on line %d
NULL
===DONE===
