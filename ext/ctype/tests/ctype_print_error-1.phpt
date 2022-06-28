--TEST--
Test ctype_print() function : error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_print(mixed $c)
 * Description: Checks for printable character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass incorrect number of arguments to ctype_print() to test behaviour
 */

echo "*** Testing ctype_print() : error conditions ***\n";

//Test ctype_print with one more than the expected number of arguments
echo "\n-- Testing ctype_print() function with more than expected no. of arguments --\n";
$c = 1;
$extra_arg = 10;
var_dump( ctype_print($c, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ctype_print(): 1 at most, 2 provided in %s on line %d
 -- compile-error
