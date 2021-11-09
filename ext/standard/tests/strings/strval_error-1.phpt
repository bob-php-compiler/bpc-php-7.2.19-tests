--TEST--
Test strval() function : usage variations  - error conditions
--FILE--
<?php
/* Prototype  : string strval  ( mixed $var  )
 * Description: Get the string value of a variable.
 * Source code: ext/standard/string.c
 */

echo "*** Testing strval() : error conditions ***\n";

$string  = "Hello";
$extra_arg = 10;

//Test strval with one more than the expected number of arguments
echo "\n-- Testing strval() function with more than expected no. of arguments --\n";
var_dump( strval($string, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strval(): 1 at most, 2 provided in %s on line %d
 -- compile-error
