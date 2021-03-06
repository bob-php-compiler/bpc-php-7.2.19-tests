--TEST--
Test array_combine() function : error conditions
--FILE--
<?php
/* Prototype  : array array_combine(array $keys, array $values)
 * Description: Creates an array by using the elements of the first parameter as keys
 *              and the elements of the second as the corresponding values
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_combine() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing array_combine() function with Zero arguments --\n";
var_dump( array_combine() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_combine(): 2 required, 0 provided in %s on line %d
 -- compile-error
