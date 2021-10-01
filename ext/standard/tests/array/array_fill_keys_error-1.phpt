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

$keys = array(1, 2);

echo "\n-- Testing array_fill_keys() function with less than expected no. of arguments --\n";
var_dump( array_fill_keys($keys) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_fill_keys(): 2 required, 1 provided in %s on line %d
 -- compile-error
