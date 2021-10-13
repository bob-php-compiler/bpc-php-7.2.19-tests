--TEST--
Test in_array() function : error conditions
--FILE--
<?php
/*
 * Prototype  : bool in_array ( mixed $needle, array $haystack [, bool $strict] )
 * Description: Searches haystack for needle and returns TRUE
 *              if it is found in the array, FALSE otherwise.
 * Source Code: ext/standard/array.c
*/

echo "\n*** Testing error conditions of in_array() ***\n";
/* zero argument */
var_dump( in_array() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function in_array(): 2 required, 0 provided in %s on line %d
 -- compile-error
