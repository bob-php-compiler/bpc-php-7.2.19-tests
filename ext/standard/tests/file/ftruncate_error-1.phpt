--TEST--
Test ftruncate() function : error conditions
--FILE--
<?php
/*
 Prototype: bool ftruncate ( resource $handle, int $size );
 Description: truncates a file to a given length
*/

echo "*** Testing ftruncate() : error conditions ***\n";

echo "-- Testing ftruncate() with less than expected number of arguments --\n";

// zero arguments
var_dump( ftruncate() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ftruncate(): 2 required, 0 provided in %s on line %d
 -- compile-error
