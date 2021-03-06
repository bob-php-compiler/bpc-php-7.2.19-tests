--TEST--
Test rawurlencode() function : error conditions
--FILE--
<?php
/* Prototype  : proto string rawurlencode(string str)
 * Description: URL-encodes string
 * Source code: ext/standard/url.c
 * Alias to functions:
 */

// NB: basic functionality tested in tests/strings/001.phpt

echo "*** Testing rawurlencode() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing rawurlencode() function with Zero arguments --\n";
var_dump( rawurlencode() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function rawurlencode(): 1 required, 0 provided in %s on line %d
 -- compile-error
