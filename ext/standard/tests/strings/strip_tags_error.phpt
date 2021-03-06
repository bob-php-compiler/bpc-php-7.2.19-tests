--TEST--
Test strip_tags() function : error conditions
--INI--
short_open_tag = on
--FILE--
<?php
/* Prototype  : string strip_tags(string $str [, string $allowable_tags])
 * Description: Strips HTML and PHP tags from a string
 * Source code: ext/standard/string.c
*/


echo "*** Testing strip_tags() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing strip_tags() function with Zero arguments --\n";
var_dump( strip_tags() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strip_tags(): 1 required, 0 provided in %s on line %d
 -- compile-error
