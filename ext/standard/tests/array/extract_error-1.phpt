--TEST--
Test extract() function (error conditions)
--FILE--
<?php

/* Zero Arguments */
var_dump( extract() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function extract(): 1 required, 0 provided in %s on line %d
 -- compile-error
