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

echo "\n-- Testing htmlentities() function with more than expected no. of arguments --\n";
$s1 = "first=val1&second=val2&third=val3";
parse_str($s1, $res_array, true);

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function parse_str(): 2 at most, 3 provided in %s on line %d
 -- compile-error
