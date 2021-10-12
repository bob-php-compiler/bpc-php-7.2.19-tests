--TEST--
Test array_push() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : int array_push(array $stack, mixed $var [, mixed $...])
 * Description: Pushes elements onto the end of the array
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to array_push() to test behaviour
 */

echo "*** Testing array_push() : error conditions ***\n";

// Testing array_push with one less than the expected number of arguments
echo "\n-- Testing array_push() function with less than expected no. of arguments --\n";
$stack = array(1, 2);
var_dump( array_push($stack) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_push(): 2 required, 1 provided in %s on line %d
 -- compile-error
