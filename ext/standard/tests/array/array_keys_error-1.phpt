--TEST--
Test array_keys() function (error conditions)
--FILE--
<?php

var_dump(array_keys());  // Zero arguments

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_keys(): 1 required, 0 provided in %s on line %d
 -- compile-error
