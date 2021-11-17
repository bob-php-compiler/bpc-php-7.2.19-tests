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

$file_handle  = fopen ( $filename, "w");

// more than expected no. of args
echo "-- Testing fwrite() with more than expected number of arguments --\n";
$data = "data";
var_dump( fwrite($file_handle, $data, strlen($data), 10) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fwrite(): 3 at most, 4 provided in %s on line %d
 -- compile-error
