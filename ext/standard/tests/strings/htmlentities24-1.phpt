--TEST--
Test htmlentities() function
--FILE--
<?php
echo "\n*** Testing error conditions ***\n";
/* zero argument */
var_dump( htmlentities() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function htmlentities(): 1 required, 0 provided in %s on line %d
 -- compile-error
