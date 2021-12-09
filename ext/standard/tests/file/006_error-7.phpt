--TEST--
Test fileperms(), chmod() functions: error conditions
--FILE--
<?php

/* With args greater than expected */
var_dump( fileperms("nofile", 0777) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fileperms(): 1 at most, 2 provided in %s on line %d
 -- compile-error
