--TEST--
Test uasort() function : error conditions
--FILE--
<?php
/* Prototype  : bool uasort(array $array_arg, string $cmp_function)
 * Description: Sort an array with a user-defined comparison function and maintain index association
 * Source code: ext/standard/array.c
*/

echo "*** Testing uasort() : error conditions ***\n";

// Initialize 'array_arg'
$array_arg = array(0 => 1, 1 => 10, 2 => 'string', 3 => 3, 4 => 2, 5 => 100, 6 => 25);

// With non existent comparison function and extra argument
echo "-- Testing uasort() function with non-existent compare function and extra argument --\n";
var_dump( uasort($array_arg, 'non_existent', $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function uasort(): 2 at most, 3 provided in %s on line %d
 -- compile-error
