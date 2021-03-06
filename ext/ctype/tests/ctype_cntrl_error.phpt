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

// Zero arguments
echo "\n-- Testing ctype_cntrl() function with Zero arguments --\n";
var_dump( ctype_cntrl() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_cntrl(): 1 required, 0 provided in %s on line %d
 -- compile-error
