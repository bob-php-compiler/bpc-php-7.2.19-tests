--TEST--
Test parse_url() function : error conditions - wrong number of args
--FILE--
<?php
/* Prototype  : proto mixed parse_url(string url, [int url_component])
 * Description: Parse a URL and return its components
 * Source code: ext/standard/url.c
 * Alias to functions:
 */

echo "*** Testing parse_url() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing parse_url() function with Zero arguments --\n";
var_dump( parse_url() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function parse_url(): 1 required, 0 provided in %s on line %d
 -- compile-error
