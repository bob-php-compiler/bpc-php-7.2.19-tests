--TEST--
Test uasort() function : error conditions
--FILE--
<?php

// With zero arguments
echo "-- Testing uasort() function with Zero argument --\n";
var_dump( uasort() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function uasort(): 2 required, 0 provided in %s on line %d
 -- compile-error
