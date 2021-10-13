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

/* unexpected no.of arguments in array_search() */
$var = array("mon", "tues", "wed", "thurs");
var_dump( array_search(1, $var, 0, "test") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_search(): 3 at most, 4 provided in %s on line %d
 -- compile-error
