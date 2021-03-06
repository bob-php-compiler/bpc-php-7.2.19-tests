--TEST--
Test ctype_alpha() function : error conditions - Incorrect number of arguments
--FILE--
<?php
/* Prototype  : bool ctype_alpha(mixed $c)
 * Description: Checks for alphabetic character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass an incorrect number of arguments to ctype_alpha() to test behaviour
 */

echo "*** Testing ctype_alpha() : error conditions ***\n";

//Test ctype_alpha with one more than the expected number of arguments
echo "\n-- Testing ctype_alpha() function with more than expected no. of arguments --\n";
$c = 1;
$extra_arg = 10;
var_dump( ctype_alpha($c, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ctype_alpha(): 1 at most, 2 provided in %s on line %d
 -- compile-error
