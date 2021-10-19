--TEST--
Test range() function (errors)
--INI--
precision=14
--FILE--
<?php

var_dump( range() );  // No.of args = 0

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function range(): 2 required, 0 provided in %s on line %d
 -- compile-error
