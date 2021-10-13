--TEST--
Test array_shift() function
--FILE--
<?php

/* Zero argument  */
var_dump( array_shift() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_shift(): 1 required, 0 provided in %s on line %d
 -- compile-error
