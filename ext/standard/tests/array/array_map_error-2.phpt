--TEST--
Test array_map() function : error conditions
--FILE--
<?php
/* Prototype  : array array_map  ( callback $callback  , array $arr1  [, array $...  ] )
 * Description: Applies the callback to the elements of the given arrays
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_map() : error conditions ***\n";

// Testing array_map with one less than the expected number of arguments
echo "\n-- Testing array_map() function with one less than expected no. of arguments --\n";
function callback1() {
  return 1;
}
try {
	var_dump( array_map('callback1') );
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_map(): 2 required, 1 provided in %s on line %d
 -- compile-error
