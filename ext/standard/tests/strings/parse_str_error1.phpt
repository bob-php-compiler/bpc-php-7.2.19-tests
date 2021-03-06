--TEST--
Test parse_str() function : non-default arg_separator.input specified
--INI--
arg_separator.input = "/"
--FILE--
<?php
/* Prototype  : void parse_str  ( string $str  [, array &$arr  ] )
 * Description: Parses the string into variables
 * Source code: ext/standard/string.c
*/

echo "*** Testing parse_str() : error conditions ***\n";

echo "\n-- Testing htmlentities() function with less than expected no. of arguments --\n";
parse_str();

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function parse_str(): 1 required, 0 provided in %s on line %d
 -- compile-error
