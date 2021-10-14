--TEST--
Test array_walk() function : error conditions
--FILE--
<?php

$input = array(1, 2);

echo "-- Testing array_walk() function with non existent callback function  --\n";
var_dump( array_walk($input, "non_existent") );

echo "Done";
?>
--EXPECTF--
-- Testing array_walk() function with non existent callback function  --

Warning: array_walk() expects parameter 2 to be callable, non_existent given in %s on line %d
NULL
Done
