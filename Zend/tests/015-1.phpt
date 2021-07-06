--TEST--
trigger_error() tests
--FILE--
<?php

var_dump(trigger_error());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function trigger_error(): 1 required, 0 provided in %s on line %d
 -- compile-error
