--TEST--
Test array_uintersect_assoc() function : basic functionality - testing with multiple array arguments
--ARGS--
--bpc-include-file ext/standard/tests/array/compare_function.inc
--FILE--
<?php
/* Prototype  : array array_uintersect_assoc(array arr1, array arr2 [, array ...], callback data_compare_func)
 * Description: U
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_uintersect_assoc() : basic functionality - testing with multiple array arguments ***\n";

include('compare_function.inc');
$data_compare_function = 'compare_function';

// Initialise all required variables
$arr1 = array("one" => "one", "02" => "two", '3' => "three", "four", "0.5" => 5, 0.6 => 6, "0x7" => "seven");
$arr2 = array("one" => "one", "02" => "two", '3' => "three");
$arr3 = array("one" => "one", '3' => "three", "0.5" => 5);
$arr4 = array("one" => "one", '3' => "three", "0.5" => 5);


var_dump( array_uintersect_assoc($arr1, $arr2, $arr3, $arr4, $data_compare_function) );


?>
===DONE===
--EXPECTF--
*** Testing array_uintersect_assoc() : basic functionality - testing with multiple array arguments ***
array(2) {
  ["one"]=>
  string(3) "one"
  [3]=>
  string(5) "three"
}
===DONE===
