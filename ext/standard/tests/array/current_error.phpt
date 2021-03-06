--TEST--
Test current() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : mixed current(array $array_arg)
 * Description: Return the element currently pointed to by the internal array pointer
 * Source code: ext/standard/array.c
 * Alias to functions: pos
 */

/*
 * Pass incorrect number of arguments to current() to test behaviour
 */

echo "*** Testing current() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing current() function with Zero arguments --\n";
var_dump( current() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function current(): 1 required, 0 provided in %s on line %d
 -- compile-error
