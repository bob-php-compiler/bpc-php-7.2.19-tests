--TEST--
Test is_object() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
//Zero argument
var_dump( is_object() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_object(): 1 required, 0 provided in %s on line %d
 -- compile-error
