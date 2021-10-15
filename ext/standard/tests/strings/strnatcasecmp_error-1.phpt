--TEST--
Test strnatcasecmp() function : error conditions
--FILE--
<?php
/* Prototype  : int strnatcasecmp  ( string $str1  , string $str2  )
 * Description: Case insensitive string comparisons using a "natural order" algorithm
 * Source code: ext/standard/string.c
*/
echo "*** Testing strnatcasecmp() : error conditions ***\n";

echo "\n\n-- Testing strnatcasecmp() function with more than expected no. of arguments --\n";
$str1 = "abc1";
$str2 = "ABC1";
$extra_arg = 10;
var_dump( strnatcasecmp( $str1, $str2, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strnatcasecmp(): 2 at most, 3 provided in %s on line %d
 -- compile-error
