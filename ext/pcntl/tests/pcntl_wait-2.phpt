--TEST--
pcntl_wait()
--FILE--
<?php
var_dump(pcntl_waitpid());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function pcntl_waitpid(): 2 required, 0 provided in %s on line %d
 -- compile-error
