--TEST--
Test strval() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
//Zero argument
var_dump( strval() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strval(): 1 required, 0 provided in %s on line %d
 -- compile-error
