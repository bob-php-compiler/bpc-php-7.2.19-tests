--TEST--
Test array_unique() function : usage variations - binary safe checking
--FILE--
<?php
/* Prototype  : array array_unique(array $input)
 * Description: Removes duplicate values from array
 * Source code: ext/standard/array.c
*/

/*
 * Testing the functionality of array_unique() by passing an array having binary values.
*/

echo "*** Testing array_unique() : array with binary data for \$input argument ***\n";

// array with binary values
$input = array( "1", "hello", "world", "str1" => "hello", "str2" => "world");

var_dump( array_unique($input) );

echo "Done";
?>
--EXPECTF--
*** Testing array_unique() : array with binary data for $input argument ***
array(3) {
  [0]=>
  string(1) "1"
  [1]=>
  string(5) "hello"
  [2]=>
  string(5) "world"
}
Done
