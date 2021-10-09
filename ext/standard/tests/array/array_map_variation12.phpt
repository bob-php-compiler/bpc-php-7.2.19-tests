--TEST--
Test array_map() function : usage variations - built-in function as callback
--FILE--
<?php
/* Prototype  : array array_map  ( callback $callback  , array $arr1  [, array $...  ] )
 * Description: Applies the callback to the elements of the given arrays
 * Source code: ext/standard/array.c
 */

/*
 * Test array_map() by passing buit-in function as callback function
 */

echo "*** Testing array_map() : built-in function ***\n";

$array1 = array(1, 2, 3);
$array2 = array(3, 4, 5);

echo "-- with built-in function 'pow' and two parameters --\n";
var_dump( array_map('pow', $array1, $array2));

echo "-- with built-in function 'pow' and one parameter --\n";
try {
    var_dump( array_map('pow', $array1));
} catch (ArgumentCountError $e) {
    echo "Error: Too few arguments to function pow(): 2 required, 1 provided\n";
}

echo "-- with language construct --\n";
var_dump( array_map('echo', $array1));

echo "Done";
?>
--EXPECTF--
*** Testing array_map() : built-in function ***
-- with built-in function 'pow' and two parameters --
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(16)
  [2]=>
  int(243)
}
-- with built-in function 'pow' and one parameter --
Error: Too few arguments to function pow(): 2 required, 1 provided
-- with language construct --

Warning: array_map() expects parameter 1 to be callable, echo given in %s on line %d
NULL
Done
