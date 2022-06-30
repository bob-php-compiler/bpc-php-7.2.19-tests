--TEST--
pcntl_alarm()
--FILE--
<?php
var_dump(pcntl_alarm());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function pcntl_alarm(): 1 required, 0 provided in %s on line %d
 -- compile-error
