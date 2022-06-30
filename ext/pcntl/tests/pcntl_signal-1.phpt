--TEST--
pcntl_signal()
--FILE--
<?php
var_dump(pcntl_signal());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function pcntl_signal(): 2 required, 0 provided in %s on line %d
 -- compile-error
