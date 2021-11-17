--TEST--
Test fpassthru() function: Error conditions
--FILE--
<?php
/*
Prototype: int fpassthru ( resource $handle );
Description: Reads to EOF on the given file pointer from the current position
  and writes the results to the output buffer.
*/

echo "*** Test error conditions of fpassthru() function ***\n";

/* No.of args greaer than expected */
var_dump( fpassthru("", "") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fpassthru(): 1 at most, 2 provided in %s on line %d
 -- compile-error
