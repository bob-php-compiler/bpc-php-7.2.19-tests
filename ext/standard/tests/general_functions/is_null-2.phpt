--TEST--
Test is_null() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

//arguments more than expected
var_dump( is_null(NULL, null) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_null(): 1 at most, 2 provided in %s on line %d
 -- compile-error
