--TEST--
Test is_scalar() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
// Zero arguments
var_dump( is_scalar() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_scalar(): 1 required, 0 provided in %s on line %d
 -- compile-error
