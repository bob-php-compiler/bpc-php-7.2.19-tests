--TEST--
Test array_map() function : error conditions
--FILE--
<?php
/* Prototype  : array array_map  ( callback $callback  , array $arr1  [, array $...  ] )
 * Description: Applies the callback to the elements of the given arrays
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_map() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing array_map() function with Zero arguments --\n";
var_dump( array_map() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_map(): 2 required, 0 provided in %s on line %d
 -- compile-error
