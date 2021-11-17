--TEST--
Test fread() function : error conditions
--FILE--
<?php
/*
 Prototype: string fread ( resource $handle [, int $length] );
 Description: reads up to length bytes from the file pointer referenced by handle.
   Reading stops when up to length bytes have been read, EOF (end of file) is
   reached, (for network streams) when a packet becomes available, or (after
   opening userspace stream) when 8192 bytes have been read whichever comes first.
*/

echo "*** Testing error conditions ***\n";
$filename = 'fread_error.php';
$file_handle = fopen($filename, "r");

// more than expected no. of args
echo "-- Testing fread() with more than expected number of arguments --\n";
var_dump( fread($file_handle, 10, $file_handle) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fread(): 2 at most, 3 provided in %s on line %d
 -- compile-error
