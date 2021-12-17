--TEST--
Test is_scalar() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

// Arguments more than expected
var_dump( is_scalar( new stdclass, new stdclass) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_scalar(): 1 at most, 2 provided in %s on line %d
 -- compile-error
