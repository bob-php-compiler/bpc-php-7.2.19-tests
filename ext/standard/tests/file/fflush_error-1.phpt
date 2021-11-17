--TEST--
Test fflush() function: error conditions
--FILE--
<?php
/*
 Prototype: bool fflush ( resource $handle );
 Description: Flushes the output to a file
*/

echo "*** Testing error conditions ***\n";

// zero argument
echo "-- Testing fflush(): with zero argument --\n";
var_dump( fflush() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fflush(): 1 required, 0 provided in %s on line %d
 -- compile-error
