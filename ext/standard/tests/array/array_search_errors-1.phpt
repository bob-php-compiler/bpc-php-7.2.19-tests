--TEST--
Test array_search() function - error conditions
--FILE--
<?php
/*
 * Prototype  : mixed array_search ( mixed $needle, array $haystack [, bool $strict] )
 * Description: Searches haystack for needle and returns the key if it is found in the array, FALSE otherwise
 * Source Code: ext/standard/array.c
*/

echo "*** Testing error conditions of array_search() ***\n";
/* zero argument */
var_dump( array_search() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_search(): 2 required, 0 provided in %s on line %d
 -- compile-error
