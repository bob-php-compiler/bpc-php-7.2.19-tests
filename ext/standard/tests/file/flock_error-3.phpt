--TEST--
Test flock() function: Error conditions
--FILE--
<?php

$fp = fopen('/proc/self/comm', 'r');
/* No.of args greater than expected */
var_dump(flock($fp, "", $var, ""));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function flock(): 3 at most, 4 provided in %s on line %d
 -- compile-error
