--TEST--
Test array_push() function
--FILE--
<?php

/* Zero argument  */
var_dump( array_push() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_push(): 2 required, 0 provided in %s on line %d
 -- compile-error
