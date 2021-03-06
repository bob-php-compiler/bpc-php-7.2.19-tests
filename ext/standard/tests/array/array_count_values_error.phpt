--TEST--
Test array_count_values() function : Invalid parameters
--FILE--
<?php
/* Prototype  : proto array array_count_values(array input)
 * Description: Return the value as key and the frequency of that value in input as value
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

/*
 * Test for handling of incorrect parameters.
 */

echo "*** Testing array_count_values() : error conditions ***\n";

//Test array_count_values with integer arguments
echo "\n-- Testing array_count_values() function integer arguments --\n";
var_dump( array_count_values(1 ));

echo "Done";
?>
--EXPECTF--
*** Testing array_count_values() : error conditions ***

-- Testing array_count_values() function integer arguments --

Warning: array_count_values() expects parameter 1 to be array, integer given in %sarray_count_values_error.php on line %d
NULL
Done
