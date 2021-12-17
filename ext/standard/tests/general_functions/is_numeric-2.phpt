--TEST--
Test is_numeric() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

//arguments more than expected
var_dump( is_numeric("10", "20") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_numeric(): 1 at most, 2 provided in %s on line %d
 -- compile-error
