--TEST--
Test array_merge_recursive() function : usage variations - binary safe checking
--FILE--
<?php
/* Prototype  : array array_merge_recursive(array $arr1[, array $...])
 * Description: Recursively merges elements from passed arrays into one array
 * Source code: ext/standard/array.c
*/

/*
 * Testing the functionality of array_merge_recursive() by passing an array having binary values.
*/

echo "*** Testing array_merge_recursive() : array with binary data for \$arr1 argument ***\n";

// array with binary values
$arr1 = array("1", "hello" => "hello", "world", "str1" => "hello", "str2" => "world");

// initialize the second argument
$arr2 = array("str1" => "binary", "hello" => "binary", "str2" => "binary");

echo "-- With default argument --\n";
var_dump( array_merge_recursive($arr1) );

echo "-- With more arguments --\n";
var_dump( array_merge_recursive($arr1, $arr2) );

echo "Done";
?>
--EXPECTF--
*** Testing array_merge_recursive() : array with binary data for $arr1 argument ***
-- With default argument --
array(5) {
  [0]=>
  string(1) "1"
  ["hello"]=>
  string(5) "hello"
  [1]=>
  string(5) "world"
  ["str1"]=>
  string(5) "hello"
  ["str2"]=>
  string(5) "world"
}
-- With more arguments --
array(5) {
  [0]=>
  string(1) "1"
  ["hello"]=>
  array(2) {
    [0]=>
    string(5) "hello"
    [1]=>
    string(6) "binary"
  }
  [1]=>
  string(5) "world"
  ["str1"]=>
  array(2) {
    [0]=>
    string(5) "hello"
    [1]=>
    string(6) "binary"
  }
  ["str2"]=>
  array(2) {
    [0]=>
    string(5) "world"
    [1]=>
    string(6) "binary"
  }
}
Done
