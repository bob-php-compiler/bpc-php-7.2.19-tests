--TEST--
Test strnatcasecmp() function : error conditions
--FILE--
<?php
/* Prototype  : int strnatcasecmp  ( string $str1  , string $str2  )
 * Description: Case insensitive string comparisons using a "natural order" algorithm
 * Source code: ext/standard/string.c
*/
echo "*** Testing strnatcasecmp() : error conditions ***\n";

echo "-- Testing strnatcmp() function with Zero arguments --\n";
var_dump( strnatcasecmp() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strnatcasecmp(): 2 required, 0 provided in %s on line %d
 -- compile-error
