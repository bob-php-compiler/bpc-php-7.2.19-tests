--TEST--
Test strtolower() function
--FILE--
<?php

echo "\n*** Testing error conditions ***";
var_dump( strtolower() ); /* Zero arguments */

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strtolower(): 1 required, 0 provided in %s on line %d
 -- compile-error
