--TEST--
Test is_string() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

//arguments more than expected
var_dump( is_string("string", "test") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_string(): 1 at most, 2 provided in %s on line %d
 -- compile-error
