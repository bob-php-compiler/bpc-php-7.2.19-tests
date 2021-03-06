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

// Zero arguments
echo "\n-- Testing ctype_alpha() function with Zero arguments --\n";
var_dump( ctype_alpha() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_alpha(): 1 required, 0 provided in %s on line %d
 -- compile-error
