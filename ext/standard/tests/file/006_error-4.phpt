--TEST--
Test fileperms(), chmod() functions: error conditions
--FILE--
<?php

/* With args less than expected */
var_dump( fileperms() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fileperms(): 1 required, 0 provided in %s on line %d
 -- compile-error
