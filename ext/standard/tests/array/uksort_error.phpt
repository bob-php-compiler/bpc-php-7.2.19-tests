--TEST--
Test uksort() function : error conditions
--FILE--
<?php
/* Prototype  : bool uksort(array array_arg, string cmp_function)
 * Description: Sort an array by keys using a user-defined comparison function
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing uksort() : error conditions ***\n";

echo "\n-- Testing uksort() function with more than expected no. of arguments --\n";
$array_arg = array(1, 2);
$cmp_function = 'string_val';
$extra_arg = 10;
var_dump( uksort($array_arg, $cmp_function, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function uksort(): 2 at most, 3 provided in %s on line %d
 -- compile-error
