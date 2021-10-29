--TEST--
Test trim() function
--FILE--
<?php

/* Testing error conditions */
echo "\n*** Testing error conditions ***\n";

//Zero arguments
var_dump( trim() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function trim(): 1 required, 0 provided in %s on line %d
 -- compile-error
