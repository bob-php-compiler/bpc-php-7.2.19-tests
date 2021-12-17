--TEST--
Test is_int() & it's FALIASes: is_long() & is_integer() functions
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

//arguments more than expected
var_dump( is_integer(TRUE, FALSE) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_integer(): 1 at most, 2 provided in %s on line %d
 -- compile-error
