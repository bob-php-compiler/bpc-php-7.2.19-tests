--TEST--
Test prev() function : error conditions - Pass incorrect number of arguments
--FILE--
<?php
/* Prototype  : mixed prev(array $array_arg)
 * Description: Move array argument's internal pointer to the previous element and return it
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to prev() to test behaviour
 */

echo "*** Testing prev() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing prev() function with Zero arguments --\n";
var_dump( prev() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function prev(): 1 required, 0 provided in %s on line %d
 -- compile-error
