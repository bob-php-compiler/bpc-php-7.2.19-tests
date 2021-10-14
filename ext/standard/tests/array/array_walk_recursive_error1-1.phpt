--TEST--
Test array_walk_recursive() function : error conditions
--FILE--
<?php
/* Prototype  : bool array_walk_recursive(array $input, string $funcname [, mixed $userdata])
 * Description: Apply a user function to every member of an array
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_walk_recursive() : error conditions ***\n";

echo "-- Testing array_walk_recursive() function with zero arguments --\n";
var_dump( array_walk_recursive() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_walk_recursive(): 2 required, 0 provided in %s on line %d
 -- compile-error
