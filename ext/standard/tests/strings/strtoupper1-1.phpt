--TEST--
Test strtoupper() function
--FILE--
<?php

echo "\n*** Testing error conditions ***";
var_dump( strtoupper() ); /* Zero arguments */

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strtoupper(): 1 required, 0 provided in %s on line %d
 -- compile-error
