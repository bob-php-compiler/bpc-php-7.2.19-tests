--TEST--
Test usleep() function : error conditions
--FILE--
<?php

echo "*** Testing usleep() : error conditions ***\n";

echo "\n-- Testing usleep() function with zero arguments --\n";
var_dump( usleep() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function usleep(): 1 required, 0 provided in %s on line %d
 -- compile-error
