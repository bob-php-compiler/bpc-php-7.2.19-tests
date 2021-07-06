--TEST--
constant() tests
--FILE--
<?php

var_dump(constant("", ""));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function constant(): 1 at most, 2 provided in %s on line %d
 -- compile-error
