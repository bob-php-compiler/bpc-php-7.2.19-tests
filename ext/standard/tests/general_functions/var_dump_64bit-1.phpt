--TEST--
Test var_dump() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
//passing zero argument
var_dump();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function var_dump(): 1 required, 0 provided in %s on line %d
 -- compile-error
