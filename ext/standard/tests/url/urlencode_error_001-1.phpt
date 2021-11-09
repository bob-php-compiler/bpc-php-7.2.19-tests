--TEST--
Test urlencode() function : error conditions
--FILE--
<?php
/* Prototype  : proto string urlencode(string str)
 * Description: URL-encodes string
 * Source code: ext/standard/url.c
 * Alias to functions:
 */

// NB: basic functionality tested in tests/strings/001.phpt

echo "*** Testing urlencode() : error conditions ***\n";

//Test urlencode with one more than the expected number of arguments
echo "\n-- Testing urlencode() function with more than expected no. of arguments --\n";
$str = 'string_val';
$extra_arg = 10;
var_dump( urlencode($str, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function urlencode(): 1 at most, 2 provided in %s on line %d
 -- compile-error
