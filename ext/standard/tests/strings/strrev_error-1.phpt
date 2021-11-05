--TEST--
Test strrev() function : error conditions
--FILE--
<?php
/* Prototype  : string strrev(string $str);
 * Description: Reverse a string
 * Source code: ext/standard/string.c
*/

echo "*** Testing strrev() : error conditions ***\n";

echo "\n-- Testing strrev() function with more than expected no. of arguments --";
var_dump( strrev("string", 'extra_arg') );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strrev(): 1 at most, 2 provided in %s on line %d
 -- compile-error
