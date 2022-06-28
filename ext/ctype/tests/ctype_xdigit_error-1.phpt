--TEST--
Test ctype_xdigit() function : error conditions - Incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_xdigit(mixed $c)
 * Description: Checks for character(s) representing a hexadecimal digit
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass incorrect number of arguments to ctype_xdigit() to test behaviour
 */

echo "*** Testing ctype_xdigit() : error conditions ***\n";

//Test ctype_xdigit with one more than the expected number of arguments
echo "\n-- Testing ctype_xdigit() function with more than expected no. of arguments --\n";
$c = 1;
$extra_arg = 10;
var_dump( ctype_xdigit($c, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ctype_xdigit(): 1 at most, 2 provided in %s on line %d
 -- compile-error
