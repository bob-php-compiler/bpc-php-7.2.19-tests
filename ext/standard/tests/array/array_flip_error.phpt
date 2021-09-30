--TEST--
Test array_flip() function : error conditions
--FILE--
<?php
/* Prototype  : array array_flip(array $input)
 * Description: Return array with key <-> value flipped
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_flip() : error conditions ***\n";

// Zero arguments
echo "-- Testing array_flip() function with Zero arguments --\n";
var_dump( array_flip() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_flip(): 1 required, 0 provided in %s on line %d
 -- compile-error
