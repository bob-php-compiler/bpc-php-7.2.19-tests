--TEST--
Test htmlspecialchars() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
/* zero argument */
var_dump( htmlspecialchars() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function htmlspecialchars(): 1 required, 0 provided in %s on line %d
 -- compile-error
