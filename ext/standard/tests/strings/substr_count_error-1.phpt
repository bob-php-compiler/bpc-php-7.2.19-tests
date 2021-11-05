--TEST--
Test substr_count() function (error conditions)
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

/* Zero argument */
var_dump( substr_count() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function substr_count(): 2 required, 0 provided in %s on line %d
 -- compile-error
