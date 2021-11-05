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

echo "\n-- Testing strrchr() function with less than expected no. of arguments --";
var_dump( strrchr($haystack) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strrchr(): 2 required, 1 provided in %s on line %d
 -- compile-error
