--TEST--
Test is_bool() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

//arguments more than expected
var_dump( is_bool(TRUE, FALSE) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_bool(): 1 at most, 2 provided in %s on line %d
 -- compile-error
