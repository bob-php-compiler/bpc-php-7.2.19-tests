--TEST--
constant() tests
--FILE--
<?php

var_dump(constant());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function constant(): 1 required, 0 provided in %s on line %d
 -- compile-error
