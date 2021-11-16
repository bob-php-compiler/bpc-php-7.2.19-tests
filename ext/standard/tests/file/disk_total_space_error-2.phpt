--TEST--
Test disk_total_space() function : error conditions
--SKIPIF--
<?php
if(substr(PHP_OS, 0, 3) == 'WIN')
  die("skip Not valid on Windows");
?>
--FILE--
<?php
/*
 *  Prototype: float disk_total_space( string $directory );
 *  Description: given a string containing a directory, this function
 *               will return the total number of bytes on the corresponding
 *               filesystem or disk partition
 */

echo "*** Testing error conditions ***\n";
$file_path = '.';
var_dump( disk_total_space( $file_path, "extra argument") ); // More than valid number of arguments

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function disk_total_space(): 1 at most, 2 provided in %s on line %d
 -- compile-error
