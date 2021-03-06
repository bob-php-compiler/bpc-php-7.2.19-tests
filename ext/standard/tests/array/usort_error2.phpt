--TEST--
Test usort() function : error conditions - Pass unknown 'cmp_function'
--FILE--
<?php
/* Prototype  : bool usort(array $array_arg, string $cmp_function)
 * Description: Sort an array by values using a user-defined comparison function
 * Source code: ext/standard/array.c
 */

/*
 * Pass an unknown comparison function to usort() to test behaviour.
 * Pass incorrect number of arguments and an unknown function to test which error
 * is generated.
 */

echo "*** Testing usort() : error conditions ***\n";

// Initialize 'array_arg'
$array_arg = array(0 => 1, 1 => 10, 2 => 'string', 3 => 3, 4 => 2, 5 => 100, 6 => 25);

// With non existent comparison function
echo "\n-- Testing usort() function with non-existent compare function --\n";
var_dump( usort($array_arg, 'non_existent') );

?>
===DONE===
--EXPECTF--
*** Testing usort() : error conditions ***

-- Testing usort() function with non-existent compare function --

Warning: usort() expects parameter 2 to be callable, non_existent given in %s on line %d
NULL
===DONE===
