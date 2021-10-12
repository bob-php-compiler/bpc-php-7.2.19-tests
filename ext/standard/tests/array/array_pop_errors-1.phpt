--TEST--
Test array_pop() function (errors)
--FILE--
<?php

/* Zero argument  */
var_dump( array_pop() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_pop(): 1 required, 0 provided in %s on line %d
 -- compile-error
