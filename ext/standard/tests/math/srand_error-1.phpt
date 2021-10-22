--TEST--
Test srand() function :  error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : void srand  ([ int $seed  ] )
 * Description: Seed the random number generator.
 * Source code: ext/standard/rand.c
 */

/*
 * Pass incorrect number of arguments to srand() to test behaviour
 */

echo "*** Testing srand() : error conditions ***\n";

var_dump(srand(500, 0, true));
?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function srand(): 2 at most, 3 provided in %s on line %d
 -- compile-error
