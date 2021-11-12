--TEST--
Test ftruncate() function : error conditions
--FILE--
<?php
/*
 Prototype: bool ftruncate ( resource $handle, int $size );
 Description: truncates a file to a given length
*/

echo "*** Testing ftruncate() : error conditions ***\n";

$filename = "ftruncate_error.tmp";
$file_handle = fopen($filename, "w" );
fwrite($file_handle, "Testing ftruncate error conditions \n");
fflush($file_handle);
echo "\n Initial file size = ".filesize($filename)."\n";

echo "-- Testing ftruncate() with less than expected number of arguments --\n";

// arguments less than expected numbers
var_dump( ftruncate( $file_handle ) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ftruncate(): 2 required, 1 provided in %s on line %d
 -- compile-error
