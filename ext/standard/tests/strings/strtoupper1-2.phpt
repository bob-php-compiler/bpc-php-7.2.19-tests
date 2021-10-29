--TEST--
Test strtoupper() function
--FILE--
<?php

echo "\n*** Testing error conditions ***";
var_dump( strtoupper("a", "b") ); /* Arguments > Expected */

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strtoupper(): 1 at most, 2 provided in %s on line %d
 -- compile-error
