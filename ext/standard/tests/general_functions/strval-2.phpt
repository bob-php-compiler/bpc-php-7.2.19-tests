--TEST--
Test strval() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

//arguments more than expected
var_dump( strval(1, 2) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strval(): 1 at most, 2 provided in %s on line %d
 -- compile-error
