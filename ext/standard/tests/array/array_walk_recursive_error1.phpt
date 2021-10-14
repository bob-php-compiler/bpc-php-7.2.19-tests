--TEST--
Test array_walk_recursive() function : error conditions
--FILE--
<?php
/* Prototype  : bool array_walk_recursive(array $input, string $funcname [, mixed $userdata])
 * Description: Apply a user function to every member of an array
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_walk_recursive() : error conditions ***\n";

$input = array( array(1, 2), array(3), array(4, 5));
echo "-- Testing array_walk_recursive() function with non existent callback function  --\n";
var_dump( array_walk_recursive($input, "non_existent") );

echo "Done";
?>
--EXPECTF--
*** Testing array_walk_recursive() : error conditions ***
-- Testing array_walk_recursive() function with non existent callback function  --

Warning: array_walk_recursive() expects parameter 2 to be callable, non_existent given in %s on line %d
NULL
Done
