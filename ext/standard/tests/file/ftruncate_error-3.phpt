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

echo "-- Testing ftruncate() with more than expected number of arguments --\n";
// more than expected number of arguments
var_dump( ftruncate($file_handle, 10, 20) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ftruncate(): 2 at most, 3 provided in %s on line %d
 -- compile-error
