--TEST--
Test strrev() function : error conditions
--FILE--
<?php
/* Prototype  : string strrev(string $str);
 * Description: Reverse a string
 * Source code: ext/standard/string.c
*/

echo "*** Testing strrev() : error conditions ***\n";
echo "-- Testing strrev() function with Zero arguments --";
var_dump( strrev() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strrev(): 1 required, 0 provided in %s on line %d
 -- compile-error
