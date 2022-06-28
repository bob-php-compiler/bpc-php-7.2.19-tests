--TEST--
Test ctype_cntrl() function : error conditions - Incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_cntrl(mixed $c)
 * Description: Checks for control character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass an incorrect number of arguments to ctype_cntrl() to test behaviour
 */

echo "*** Testing ctype_cntrl() : error conditions ***\n";

//Test ctype_cntrl with one more than the expected number of arguments
echo "\n-- Testing ctype_cntrl() function with more than expected no. of arguments --\n";
$c = 1;
$extra_arg = 10;
var_dump( ctype_cntrl($c, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ctype_cntrl(): 1 at most, 2 provided in %s on line %d
 -- compile-error
