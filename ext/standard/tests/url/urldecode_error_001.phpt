--TEST--
Test urldecode() function : error conditions
--FILE--
<?php
/* Prototype  : proto string urldecode(string str)
 * Description: Decodes URL-encoded string
 * Source code: ext/standard/url.c
 * Alias to functions:
 */

// NB: basic functionality tested in tests/strings/001.phpt

echo "*** Testing urldecode() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing urldecode() function with Zero arguments --\n";
var_dump( urldecode() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function urldecode(): 1 required, 0 provided in %s on line %d
 -- compile-error
