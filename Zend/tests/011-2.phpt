--TEST--
property_exists() tests
--FILE--
<?php

var_dump(property_exists(""));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function property_exists(): 2 required, 1 provided in %s on line %d
 -- compile-error
