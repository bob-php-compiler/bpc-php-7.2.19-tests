--TEST--
Test is_array() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

//arguments more than expected
var_dump( is_array ($fp, $fp) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_array(): 1 at most, 2 provided in %s on line %d
 -- compile-error
