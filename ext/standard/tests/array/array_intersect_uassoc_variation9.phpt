--TEST--
Test array_intersect_uassoc() function : usage variation - Passing non-existing function name to callback
--FILE--
<?php
/* Prototype  : array array_intersect_uassoc(array arr1, array arr2 [, array ...], callback key_compare_func)
 * Description: Computes the intersection of arrays with additional index check, compares indexes by a callback function
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_intersect_uassoc() : usage variation ***\n";

//Initialize variables
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");

//function name within double quotes
var_dump( array_intersect_uassoc($array1, $array2, "unknown_function") );

//function name within single quotes
var_dump( array_intersect_uassoc($array1, $array2, 'unknown_function') );

//function name without quotes
var_dump( array_intersect_uassoc($array1, $array2, unknown_function) );
?>
===DONE===
--EXPECTF--
*** Testing array_intersect_uassoc() : usage variation ***

Warning: array_intersect_uassoc() expects parameter 3 to be callable, unknown_function given in %s on line %d
NULL

Warning: array_intersect_uassoc() expects parameter 3 to be callable, unknown_function given in %s on line %d
NULL

Warning: Use of undefined constant unknown_function - assumed 'unknown_function' (this will throw an Error in a future version of PHP) in %s on line %d

Warning: array_intersect_uassoc() expects parameter 3 to be callable, unknown_function given in %s on line %d
NULL
===DONE===
