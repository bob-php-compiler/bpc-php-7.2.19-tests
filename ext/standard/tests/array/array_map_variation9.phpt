--TEST--
Test array_map() function : usage variations - binary safe checking
--FILE--
<?php
/* Prototype  : array array_map  ( callback $callback  , array $arr1  [, array $...  ] )
 * Description: Applies the callback to the elements of the given arrays
 * Source code: ext/standard/array.c
 */

/*
 * Test array_map() by passing array having binary values for $arr1 argument
 */

echo "*** Testing array_map() : array with binary data for 'arr1' argument ***\n";

function callback1($a)
{
  return ($a);
}
function callback2($a, $b)
{
  return array($a => $b);
}

// array with binary data
$arr1 = array("hello", "world", "1", "22.22");

echo "-- checking binary safe array with one parameter callback function --\n";
var_dump( array_map('callback1', $arr1) );

echo "-- checking binary safe array with two parameter callback function --\n";
try {
	var_dump( array_map("callback2", $arr1) );
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}

echo "Done";
?>
--EXPECTF--
*** Testing array_map() : array with binary data for 'arr1' argument ***
-- checking binary safe array with one parameter callback function --
array(4) {
  [0]=>
  string(5) "hello"
  [1]=>
  string(5) "world"
  [2]=>
  string(1) "1"
  [3]=>
  string(5) "22.22"
}
-- checking binary safe array with two parameter callback function --
Exception: Too few arguments to function callback2(): 2 required, 1 provided
Done
