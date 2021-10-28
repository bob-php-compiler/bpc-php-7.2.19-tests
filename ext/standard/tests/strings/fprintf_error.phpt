--TEST--
Test fprintf() function (errors)
--FILE--
<?php

/* Testing Error Conditions */
echo "*** Testing Error Conditions ***\n";

/* zero argument */
var_dump( fprintf() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fprintf(): 2 required, 0 provided in %s on line %d
 -- compile-error
