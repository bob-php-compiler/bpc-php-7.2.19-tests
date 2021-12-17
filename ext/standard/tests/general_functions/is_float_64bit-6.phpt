--TEST--
Test is_float() & it's FALIASes: is_double() & is_real() functions
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

//arguments more than expected
var_dump( is_real( $floats[0], $floats[1]) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_real(): 1 at most, 2 provided in %s on line %d
 -- compile-error
