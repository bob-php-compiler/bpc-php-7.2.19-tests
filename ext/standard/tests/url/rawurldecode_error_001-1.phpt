--TEST--
Test rawurldecode() function : error conditions - wrong number of args
--FILE--
<?php
/* Prototype  : proto string rawurldecode(string str)
 * Description: Decodes URL-encodes string
 * Source code: ext/standard/url.c
 * Alias to functions:
 */

// NB: basic functionality tested in tests/strings/001.phpt

echo "*** Testing rawurldecode() : error conditions ***\n";

//Test rawurldecode with one more than the expected number of arguments
echo "\n-- Testing rawurldecode() function with more than expected no. of arguments --\n";
$str = 'string_val';
$extra_arg = 10;
var_dump( rawurldecode($str, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function rawurldecode(): 1 at most, 2 provided in %s on line %d
 -- compile-error
