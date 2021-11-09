--TEST--
Test strval() function : usage variations  - error conditions
--FILE--
<?php
/* Prototype  : string strval  ( mixed $var  )
 * Description: Get the string value of a variable.
 * Source code: ext/standard/string.c
 */

echo "*** Testing strval() : error conditions ***\n";

// Testing strval with one less than the expected number of arguments
echo "\n-- Testing strval() function with less than expected no. of arguments --\n";
var_dump( strval() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strval(): 1 required, 0 provided in %s on line %d
 -- compile-error
