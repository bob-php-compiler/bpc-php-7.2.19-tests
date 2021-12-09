--TEST--
Test fileperms(), chmod() functions: error conditions
--FILE--
<?php

/* With args less than expected */
var_dump( chmod("nofile") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function chmod(): 2 required, 1 provided in %s on line %d
 -- compile-error
