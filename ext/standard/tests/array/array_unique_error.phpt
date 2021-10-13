--TEST--
Test array_unique() function : error conditions
--FILE--
<?php
/* Prototype  : array array_unique(array $input)
 * Description: Removes duplicate values from array
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_unique() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing array_unique() function with zero arguments --\n";
var_dump( array_unique() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_unique(): 1 required, 0 provided in %s on line %d
 -- compile-error
