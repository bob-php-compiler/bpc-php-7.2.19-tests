--TEST--
Test is_null() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
//Zero argument
var_dump( is_null() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_null(): 1 required, 0 provided in %s on line %d
 -- compile-error
