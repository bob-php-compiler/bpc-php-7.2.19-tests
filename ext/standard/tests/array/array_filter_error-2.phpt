--TEST--
Test array_filter() function : error conditions
--FILE--
<?php
/* Prototype  : array array_filter(array $input [, callback $callback])
 * Description: Filters elements from the array via the callback.
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_filter() : error conditions ***\n";

$input = array(0, 1, 2, 3, 5);

// with incorrect callback function
echo "-- Testing array_filter() function with incorrect callback --";
var_dump( array_filter($input, "even") );

echo "Done"
?>
--EXPECTF--
*** Testing array_filter() : error conditions ***
-- Testing array_filter() function with incorrect callback --
Warning: array_filter() expects parameter 2 to be callable, even given in %s on line %d
NULL
Done
