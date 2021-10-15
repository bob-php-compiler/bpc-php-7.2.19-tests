--TEST--
Test strnatcmp() function : error conditions
--FILE--
<?php
/* Prototype  : int strnatcmp  ( string $str1  , string $str2  )
 * Description: String comparisons using a "natural order" algorithm
 * Source code: ext/standard/string.c
*/
echo "*** Testing strnatcmp() : error conditions ***\n";

echo "\n\n-- Testing strnatcmp() function with more than expected no. of arguments --\n";
$str1 = "abc1";
$str2 = "ABC1";
$extra_arg = 10;
var_dump( strnatcmp( $str1, $str2, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strnatcmp(): 2 at most, 3 provided in %s on line %d
 -- compile-error
