--TEST--
Test base64_decode() function : error conditions - wrong number of args
--FILE--
<?php
/* Prototype  : proto string base64_decode(string str[, bool strict])
 * Description: Decodes string using MIME base64 algorithm
 * Source code: ext/standard/base64.c
 * Alias to functions:
 */

echo "*** Testing base64_decode() : error conditions ***\n";

//Test base64_decode with one more than the expected number of arguments
echo "\n-- Testing base64_decode() function with more than expected no. of arguments --\n";
$str = 'string_val';
$strict = true;
$extra_arg = 10;
var_dump( base64_decode($str, $strict, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function base64_decode(): 2 at most, 3 provided in %s on line %d
 -- compile-error
