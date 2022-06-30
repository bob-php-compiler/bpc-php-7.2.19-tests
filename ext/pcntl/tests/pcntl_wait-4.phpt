--TEST--
pcntl_wait()
--FILE--
<?php
var_dump(pcntl_wifstopped());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function pcntl_wifstopped(): 1 required, 0 provided in %s on line %d
 -- compile-error
