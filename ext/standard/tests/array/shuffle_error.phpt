--TEST--
Test shuffle() function : error conditions
--FILE--
<?php
/* Prototype  : bool shuffle(array $array_arg)
 * Description: Randomly shuffle the contents of an array
 * Source code: ext/standard/array.c
*/

/* Test shuffle() to see that warning messages are emitted
 * when invalid number of arguments are passed to the function
*/

echo "*** Testing shuffle() : error conditions ***\n";

// zero arguments
echo "\n-- Testing shuffle() function with Zero arguments --\n";
var_dump( shuffle() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function shuffle(): 1 required, 0 provided in %s on line %d
 -- compile-error
