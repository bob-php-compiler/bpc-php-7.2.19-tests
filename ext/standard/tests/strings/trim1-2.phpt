--TEST--
Test trim() function
--FILE--
<?php

/* Testing error conditions */
echo "\n*** Testing error conditions ***\n";

// More than expected number of args */
var_dump( trim("\tstring\n", "\t\n", $null_var) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function trim(): 2 at most, 3 provided in %s on line %d
 -- compile-error
