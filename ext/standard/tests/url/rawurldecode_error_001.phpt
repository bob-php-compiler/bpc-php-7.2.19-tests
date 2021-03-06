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

// Zero arguments
echo "\n-- Testing rawurldecode() function with Zero arguments --\n";
var_dump( rawurldecode() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function rawurldecode(): 1 required, 0 provided in %s on line %d
 -- compile-error
