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

// Zero arguments
echo "\n-- Testing ctype_upper() function with Zero arguments --\n";
var_dump( ctype_upper() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_upper(): 1 required, 0 provided in %s on line %d
 -- compile-error
