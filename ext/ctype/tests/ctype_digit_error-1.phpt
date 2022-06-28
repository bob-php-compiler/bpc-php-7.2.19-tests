--TEST--
Test ctype_digit() function : error conditions - incorrect number of arguments
--FILE--
<?php
/* Prototype  : bool ctype_digit(mixed $c)
 * Description: Checks for numeric character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass an incorrect number of arguments to ctype_digit() to test behaviour
 */

echo "*** Testing ctype_digit() : error conditions ***\n";

//Test ctype_digit with one more than the expected number of arguments
echo "\n-- Testing ctype_digit() function with more than expected no. of arguments --\n";
$c = 1;
$extra_arg = 10;
var_dump( ctype_digit($c, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ctype_digit(): 1 at most, 2 provided in %s on line %d
 -- compile-error
