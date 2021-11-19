--TEST--
Test fputcsv() function : error conditions
--FILE--
<?php
/*
 Prototype: int fputcsv ( resource $handle [, array $fields [, string $delimiter [, string $enclosure]]] );
 Description:fputcsv() formats a line (passed as a fields array) as CSV and write it to the specified file
   handle. Returns the length of the written string, or FALSE on failure.
*/

echo "*** Testing error conditions ***\n";
// zero argument
echo "-- Testing fputcsv() with zero argument --\n";
var_dump( fputcsv("string") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fputcsv(): 2 required, 1 provided in %s on line %d
 -- compile-error
