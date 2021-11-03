--TEST--
Test fgets() function : error conditions
--FILE--
<?php
/*
 Prototype: string fgets ( resource $handle [, int $length] );
 Description: Gets line from file pointer
*/

echo "*** Testing error conditions ***\n";
// zero argument
echo "-- Testing fgets() with zero argument --\n";
var_dump( fgets() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fgets(): 1 required, 0 provided in %s on line %d
 -- compile-error
