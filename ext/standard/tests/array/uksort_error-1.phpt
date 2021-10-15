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

echo "\n-- Testing uksort() function with less than expected no. of arguments --\n";
$array_arg = array(1, 2);
var_dump( uksort($array_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function uksort(): 2 required, 1 provided in %s on line %d
 -- compile-error
