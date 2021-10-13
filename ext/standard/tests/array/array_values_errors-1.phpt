--TEST--
Test array_values() function (errors)
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
/* Invalid number of args */
var_dump( array_values() );  // Zero arguments

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_values(): 1 required, 0 provided in %s on line %d
 -- compile-error
