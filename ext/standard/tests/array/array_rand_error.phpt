--TEST--
Test array_rand() function : error conditions
--FILE--
<?php
/* Prototype  : mixed array_rand(array input [, int num_req])
 * Description: Return key/keys for random entry/entries in the array
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_rand() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing array_rand() function with Zero arguments --\n";
var_dump( array_rand() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_rand(): 1 required, 0 provided in %s on line %d
 -- compile-error
