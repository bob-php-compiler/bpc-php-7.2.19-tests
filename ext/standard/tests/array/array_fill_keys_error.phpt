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
$val = 1;
$extra_arg = 10;

echo "\n-- Testing array_fill_keys() function with more than expected no. of arguments --\n";
var_dump( array_fill_keys($keys, $val, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_fill_keys(): 2 at most, 3 provided in %s on line %d
 -- compile-error
