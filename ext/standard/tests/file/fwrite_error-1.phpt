--TEST--
Test fwrite() function : error conditions
--FILE--
<?php
/*
 Prototype: int fwrite ( resource $handle,string string, [, int $length] );
 Description: fwrite() writes the contents of string to the file stream pointed to by handle.
              If the length arquement is given,writing will stop after length bytes have been
              written or the end of string reached, whichever comes first.
              fwrite() returns the number of bytes written or FALSE on error
*/

echo "*** Testing fwrite() : error conditions ***\n";

echo "-- Testing fwrite() with less than expected number of arguments --\n";
// zero argument
var_dump( fwrite() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fwrite(): 2 required, 0 provided in %s on line %d
 -- compile-error
