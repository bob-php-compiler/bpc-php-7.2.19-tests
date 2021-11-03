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
$from = "string";
$to = "STRING";
$extra_arg = "extra_argument";

echo "\n-- Testing strtr() function with more than expected no. of arguments --";
var_dump( strtr($str, $from, $to, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strtr(): 3 at most, 4 provided in %s on line %d
 -- compile-error
