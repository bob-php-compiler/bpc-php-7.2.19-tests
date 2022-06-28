--TEST--
Test ctype_space() function : error conditions - Incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_space(mixed $c)
 * Description: Checks for whitespace character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass an incorrect number of arguments to ctype_space() to test behaviour
 */

echo "*** Testing ctype_space() : error conditions ***\n";

$orig = setlocale(LC_CTYPE, "C");

//Test ctype_space with one more than the expected number of arguments
echo "\n-- Testing ctype_space() function with more than expected no. of arguments --\n";
$c = " ";
$extra_arg = 10;
var_dump( ctype_space($c, $extra_arg) );

setlocale(LC_CTYPE, $orig);
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ctype_space(): 1 at most, 2 provided in %s on line %d
 -- compile-error
