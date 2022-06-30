--TEST--
pcntl_wait()
--FILE--
<?php
var_dump(pcntl_wstopsig());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function pcntl_wstopsig(): 1 required, 0 provided in %s on line %d
 -- compile-error
