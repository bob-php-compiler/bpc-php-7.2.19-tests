--TEST--
pathinfo() tests
--FILE--
<?php

var_dump(pathinfo());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function pathinfo(): 1 required, 0 provided in %s on line %d
 -- compile-error
