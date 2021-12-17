--TEST--
Test is_float() & it's FALIASes: is_double() & is_real() functions
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
//Zero argument
var_dump( is_float() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_float(): 1 required, 0 provided in %s on line %d
 -- compile-error
