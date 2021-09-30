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

// Testing array_combine with one less than the expected number of arguments
echo "\n-- Testing array_combine() function with less than expected no. of arguments --\n";
$keys = array(1, 2);
var_dump( array_combine($keys) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_combine(): 2 required, 1 provided in %s on line %d
 -- compile-error
