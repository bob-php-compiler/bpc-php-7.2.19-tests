--TEST--
Test array_walk() function : error conditions
--FILE--
<?php

$input = array(1, 2);

echo "-- Testing array_walk() function with one argument --\n";
var_dump( array_walk($input) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_walk(): 2 required, 1 provided in %s on line %d
 -- compile-error
