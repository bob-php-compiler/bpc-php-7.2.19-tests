--TEST--
Test strrchr() function : error conditions
--FILE--
<?php
/* Prototype  : string strrchr(string $haystack, string $needle);
 * Description: Finds the last occurrence of a character in a string.
 * Source code: ext/standard/string.c
*/

echo "*** Testing strrchr() function: error conditions ***\n";
$haystack = "Hello";
$needle = "Hello";
$extra_arg = "Hello";

echo "\n-- Testing strrchr() function with more than expected no. of arguments --";
var_dump( strrchr($haystack, $needle, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strrchr(): 2 at most, 3 provided in %s on line %d
 -- compile-error
