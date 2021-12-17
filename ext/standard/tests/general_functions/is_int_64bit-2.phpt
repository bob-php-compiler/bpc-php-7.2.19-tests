--TEST--
Test is_int() & it's FALIASes: is_long() & is_integer() functions
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
//Zero argument
var_dump( is_integer() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_integer(): 1 required, 0 provided in %s on line %d
 -- compile-error
