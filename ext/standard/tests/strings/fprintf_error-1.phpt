--TEST--
Test fprintf() function (errors)
--FILE--
<?php

/* Testing Error Conditions */
echo "*** Testing Error Conditions ***\n";

/* scalar argument */
var_dump( fprintf(3) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fprintf(): 2 required, 1 provided in %s on line %d
 -- compile-error
