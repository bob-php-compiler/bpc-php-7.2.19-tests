--TEST--
Test explode() function
--FILE--
<?php

var_dump( explode(":") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function explode(): 2 required, 1 provided in %s on line %d
 -- compile-error
