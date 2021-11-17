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

$filename = "./fwrite_error.tmp";

echo "-- Testing fwrite() with less than expected number of arguments --\n";
// less than expected, 1 arg
$file_handle  = fopen ( $filename, "w");
var_dump( fwrite($file_handle) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fwrite(): 2 required, 1 provided in %s on line %d
 -- compile-error
