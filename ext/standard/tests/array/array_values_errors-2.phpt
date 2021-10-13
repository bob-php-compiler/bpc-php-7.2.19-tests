--TEST--
Test array_values() function (errors)
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
/* Invalid number of args */
var_dump( array_values(array(1,2,3), "") );  // No. of args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_values(): 1 at most, 2 provided in %s on line %d
 -- compile-error
