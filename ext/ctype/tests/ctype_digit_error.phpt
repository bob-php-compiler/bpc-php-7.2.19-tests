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

// Zero arguments
echo "\n-- Testing ctype_digit() function with Zero arguments --\n";
var_dump( ctype_digit() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_digit(): 1 required, 0 provided in %s on line %d
 -- compile-error
