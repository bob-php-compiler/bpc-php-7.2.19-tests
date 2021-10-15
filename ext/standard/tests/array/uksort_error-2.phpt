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

echo "\n-- Testing uksort() function with zero arguments --\n";
var_dump( uksort() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function uksort(): 2 required, 0 provided in %s on line %d
 -- compile-error
