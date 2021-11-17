--TEST--
Test fgetc() function : error conditions
--FILE--
<?php
/*
 Prototype: string fgetc ( resource $handle );
 Description: Gets character from file pointer
*/

echo "*** Testing error conditions ***\n";
// zero argument
echo "-- Testing fgetc() with zero argument --\n";
var_dump( fgetc() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fgetc(): 1 required, 0 provided in %s on line %d
 -- compile-error
