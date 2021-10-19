--TEST--
Test range() function (errors)
--INI--
precision=14
--FILE--
<?php

var_dump( range(1,2,3,4) );  // No.of args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function range(): 3 at most, 4 provided in %s on line %d
 -- compile-error
