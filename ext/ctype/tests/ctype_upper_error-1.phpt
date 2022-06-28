--TEST--
Test ctype_upper() function : error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_upper(mixed $c)
 * Description: Checks for uppercase character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass incorrect number of arguments to ctype_upper() to test behaviour
 */

echo "*** Testing ctype_upper() : error conditions ***\n";

//Test ctype_upper with one more than the expected number of arguments
echo "\n-- Testing ctype_upper() function with more than expected no. of arguments --\n";
$c = 1;
$extra_arg = 10;
var_dump( ctype_upper($c, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ctype_upper(): 1 at most, 2 provided in %s on line %d
 -- compile-error
