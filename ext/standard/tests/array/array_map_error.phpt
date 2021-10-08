--TEST--
Test array_map() function : error conditions
--FILE--
<?php
/* Prototype  : array array_map  ( callback $callback  , array $arr1  [, array $...  ] )
 * Description: Applies the callback to the elements of the given arrays
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_map() : error conditions ***\n";

echo "\n-- Testing array_map() function with less no. of arrays than callback function arguments --\n";
$arr1 = array(1, 2);
function callback2($p, $q) {
  return $p * $q;
}
try {
	var_dump( array_map('callback2', $arr1) );
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}

echo "\n-- Testing array_map() function with more no. of arrays than callback function arguments --\n";
$arr2 = array(3, 4);
$arr3 = array(5, 6);
var_dump( array_map('callback2', $arr1, $arr2, $arr3) );

echo "Done";
?>
--EXPECTF--
*** Testing array_map() : error conditions ***

-- Testing array_map() function with less no. of arrays than callback function arguments --
Exception: Too few arguments to function callback2(): 2 required, 1 provided

-- Testing array_map() function with more no. of arrays than callback function arguments --

Warning: Too many arguments to function callback2(): 2 at most, 3 provided in %s on line %d

Warning: Too many arguments to function callback2(): 2 at most, 3 provided in %s on line %d
array(2) {
  [0]=>
  int(3)
  [1]=>
  int(8)
}
Done
