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
var_dump( disk_total_space() ); // Zero Arguments

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function disk_total_space(): 1 required, 0 provided in %s on line %d
 -- compile-error
