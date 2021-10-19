--TEST--
Test range() function (errors)
--INI--
precision=14
--FILE--
<?php

var_dump( range(1) );  // No.of args < expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function range(): 2 required, 1 provided in %s on line %d
 -- compile-error
