--TEST--
Test flock() function: Error conditions
--FILE--
<?php

$fp = fopen('/proc/self/comm', 'r');
/* No.of args leass than expected */
var_dump(flock($fp));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function flock(): 2 required, 1 provided in %s on line %d
 -- compile-error
