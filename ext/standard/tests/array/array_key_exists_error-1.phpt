--TEST--
Test array_key_exists() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : bool array_key_exists(mixed $key, array $search)
 * Description: Checks if the given key or index exists in the array
 * Source code: ext/standard/array.c
 * Alias to functions: key_exists
 */

/*
 * Pass incorrect number of arguments to array_key_exists() to test behaviour
 */

echo "*** Testing array_key_exists() : error conditions ***\n";

// Testing array_key_exists with one less than the expected number of arguments
echo "\n-- Testing array_key_exists() function with less than expected no. of arguments --\n";
$key = 1;
var_dump( array_key_exists($key) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_key_exists(): 2 required, 1 provided in %s on line %d
 -- compile-error
