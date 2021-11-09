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

//Test parse_url with one more than the expected number of arguments
echo "\n-- Testing parse_url() function with more than expected no. of arguments --\n";
$url = 'string_val';
$url_component = 10;
$extra_arg = 10;
var_dump( parse_url($url, $url_component, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function parse_url(): 2 at most, 3 provided in %s on line %d
 -- compile-error
