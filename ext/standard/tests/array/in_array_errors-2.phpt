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

/* unexpected no.of arguments in in_array() */
$var = array("mon", "tues", "wed", "thurs");
var_dump( in_array(1, $var, 0, "test") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function in_array(): 3 at most, 4 provided in %s on line %d
 -- compile-error
