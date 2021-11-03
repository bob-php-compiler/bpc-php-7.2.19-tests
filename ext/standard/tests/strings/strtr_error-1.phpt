--TEST--
Test strtr() function : error conditions
--FILE--
<?php
/* Prototype  : string strtr(string str, string from[, string to])
 * Description: Translates characters in str using given translation tables
 * Source code: ext/standard/string.c
*/

echo "*** Testing strtr() : error conditions ***\n";
$str = "string";

echo "\n-- Testing strtr() function with less than expected no. of arguments --";
var_dump( strtr($str) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strtr(): 2 required, 1 provided in %s on line %d
 -- compile-error
