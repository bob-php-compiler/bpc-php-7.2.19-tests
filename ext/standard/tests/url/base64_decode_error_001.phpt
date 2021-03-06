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

// Zero arguments
echo "\n-- Testing base64_decode() function with Zero arguments --\n";
var_dump( base64_decode() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function base64_decode(): 1 required, 0 provided in %s on line %d
 -- compile-error
