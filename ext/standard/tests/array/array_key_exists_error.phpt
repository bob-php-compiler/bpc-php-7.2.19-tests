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

//Test array_key_exists with one more than the expected number of arguments
echo "\n-- Testing array_key_exists() function with more than expected no. of arguments --\n";
$key = 1;
$search = array(1, 2);
$extra_arg = 10;
var_dump( array_key_exists($key, $search, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_key_exists(): 2 at most, 3 provided in %s on line %d
 -- compile-error
