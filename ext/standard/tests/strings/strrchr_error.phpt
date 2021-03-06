--TEST--
Test strrchr() function : error conditions
--FILE--
<?php
/* Prototype  : string strrchr(string $haystack, string $needle);
 * Description: Finds the last occurrence of a character in a string.
 * Source code: ext/standard/string.c
*/

echo "*** Testing strrchr() function: error conditions ***\n";

echo "\n-- Testing strrchr() function with Zero arguments --";
var_dump( strrchr() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strrchr(): 2 required, 0 provided in %s on line %d
 -- compile-error
