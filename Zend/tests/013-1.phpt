--TEST--
interface_exists() tests
--FILE--
<?php

var_dump(interface_exists());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function interface_exists(): 1 required, 0 provided in %s on line %d
 -- compile-error
