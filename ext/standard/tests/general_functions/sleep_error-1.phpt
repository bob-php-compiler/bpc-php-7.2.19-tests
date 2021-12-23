--TEST--
Test sleep() function : error conditions
--FILE--
<?php

echo "*** Testing sleep() : error conditions ***\n";

echo "\n-- Testing sleep() function with zero arguments --\n";
var_dump( sleep() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sleep(): 1 required, 0 provided in %s on line %d
 -- compile-error
