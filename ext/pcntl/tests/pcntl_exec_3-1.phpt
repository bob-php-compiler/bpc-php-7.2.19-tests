--TEST--
pcntl_exec() 3
--FILE--
<?php
var_dump(pcntl_exec());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function pcntl_exec(): 1 required, 0 provided in %s on line %d
 -- compile-error
