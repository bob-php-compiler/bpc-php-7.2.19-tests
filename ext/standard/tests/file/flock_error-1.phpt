--TEST--
Test flock() function: Error conditions
--FILE--
<?php

/* No.of args leass than expected */
var_dump(flock());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function flock(): 2 required, 0 provided in %s on line %d
 -- compile-error
