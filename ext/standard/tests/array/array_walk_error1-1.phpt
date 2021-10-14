--TEST--
Test array_walk() function : error conditions
--FILE--
<?php

echo "-- Testing array_walk() function with zero arguments --\n";
var_dump( array_walk() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_walk(): 2 required, 0 provided in %s on line %d
 -- compile-error
