--TEST--
Test array_fill_keys() function : error conditions
--FILE--
<?php
/* Prototype  : proto array array_fill_keys(array keys, mixed val)
 * Description: Create an array using the elements of the first parameter as keys each initialized to val
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_fill_keys() : error conditions ***\n";

echo "\n-- Testing array_fill_keys() function with no arguments --\n";
var_dump( array_fill_keys() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_fill_keys(): 2 required, 0 provided in %s on line %d
 -- compile-error
