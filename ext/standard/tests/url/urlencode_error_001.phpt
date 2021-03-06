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

// Zero arguments
echo "\n-- Testing urlencode() function with Zero arguments --\n";
var_dump( urlencode() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function urlencode(): 1 required, 0 provided in %s on line %d
 -- compile-error
