--TEST--
Test strspn() function : error conditions
--FILE--
<?php
/* Prototype  : proto int strspn(string str, string mask [, int start [, int len]])
 * Description: Finds length of initial segment consisting entirely of characters found in mask.
                If start or/and length is provided works like strspn(substr($s,$start,$len),$good_chars)
 * Source code: ext/standard/string.c
 * Alias to functions: none
*/

/*
* Test strspn() : for error conditons
*/

echo "*** Testing strspn() : error conditions ***\n";

// Testing strspn withone less than the expected number of arguments
echo "\n-- Testing strspn() function with less than expected no. of arguments --\n";
$str = 'string_val';
var_dump( strspn($str) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strspn(): 2 required, 1 provided in %s on line %d
 -- compile-error
