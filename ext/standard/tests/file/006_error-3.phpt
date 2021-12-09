--TEST--
Test fileperms(), chmod() functions: error conditions
--FILE--
<?php

/* With args less than expected */
var_dump( chmod() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function chmod(): 2 required, 0 provided in %s on line %d
 -- compile-error
