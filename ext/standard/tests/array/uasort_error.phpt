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

// With non existent comparison function
echo "-- Testing uasort() function with non-existent compare function --\n";
var_dump( uasort($array_arg, 'non_existent') );

echo "Done"
?>
--EXPECTF--
*** Testing uasort() : error conditions ***
-- Testing uasort() function with non-existent compare function --

Warning: uasort() expects parameter 2 to be callable, non_existent given in %s on line %d
NULL
Done
