--TEST--
Test array_keys() function (error conditions)
--FILE--
<?php

var_dump(array_keys(array(), "", TRUE, 100));  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_keys(): 3 at most, 4 provided in %s on line %d
 -- compile-error
