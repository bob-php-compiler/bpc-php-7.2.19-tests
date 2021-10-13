--TEST--
Test array_slice() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : array array_slice(array $input, int $offset [, int $length [, bool $preserve_keys]])
 * Description: Returns elements specified by offset and length
 * Source code: ext/standard/array.c
 */

/*
 * Pass an incorrect number of arguments to array_slice() to test behaviour
 */

echo "*** Testing array_slice() : error conditions ***\n";

// Testing array_slice with one less than the expected number of arguments
echo "\n-- Testing array_slice() function with less than expected no. of arguments --\n";
var_dump( array_slice($input) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_slice(): 2 required, 1 provided in %s on line %d
 -- compile-error
