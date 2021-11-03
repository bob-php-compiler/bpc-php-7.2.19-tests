--TEST--
Test fgetcsv() function : error conditions
--FILE--
<?php
/*
 Prototype: array fgetcsv ( resource $handle [, int $length [, string $delimiter [, string $enclosure [, string $escape]]]] );
 Description: Gets line from file pointer and parse for CSV fields
*/

echo "*** Testing error conditions ***\n";
// zero argument
echo "-- Testing fgetcsv() with zero argument --\n";
var_dump( fgetcsv() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fgetcsv(): 1 required, 0 provided in %s on line %d
 -- compile-error
