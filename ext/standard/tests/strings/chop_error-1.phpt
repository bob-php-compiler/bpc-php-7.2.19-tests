--TEST--
Test chop() function : error conditions
--FILE--
<?php
/* Prototype  : string chop ( string $str [, string $charlist] )
 * Description: Strip whitespace (or other characters) from the end of a string
 * Source code: ext/standard/string.c
*/

/*
 * Testing chop() : error conditions
*/

echo "*** Testing chop() : error conditions ***\n";

// More than expected number of arguments
echo "\n-- Testing chop() function with more than expected no. of arguments --\n";
$str = 'string_val ';
$charlist = 'string_val';
$extra_arg = 10;

var_dump( chop($str, $charlist, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function chop(): 2 at most, 3 provided in %s on line %d
 -- compile-error
