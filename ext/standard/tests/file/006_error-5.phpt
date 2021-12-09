--TEST--
Test fileperms(), chmod() functions: error conditions
--FILE--
<?php

/* With args greater than expected */
var_dump( chmod("./006_error.tmp", 0755, TRUE) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function chmod(): 2 at most, 3 provided in %s on line %d
 -- compile-error
