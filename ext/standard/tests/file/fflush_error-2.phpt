--TEST--
Test fflush() function: error conditions
--FILE--
<?php
/*
 Prototype: bool fflush ( resource $handle );
 Description: Flushes the output to a file
*/

echo "*** Testing error conditions ***\n";
$file_path = '.';

// more than expected no. of args
echo "-- Testing fflush(): with more than expected number of arguments --\n";

$filename = "$file_path/fflush_error.tmp";
$file_handle = fopen($filename, "w");
if($file_handle == false)
  exit("Error:failed to open file $filename");

var_dump( fflush($file_handle, $file_handle) );
fclose($file_handle);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fflush(): 1 at most, 2 provided in %s on line %d
 -- compile-error
