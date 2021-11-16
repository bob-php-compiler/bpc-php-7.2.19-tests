--TEST--
Test disk_free_space and its alias diskfreespace() functions : error conditions.
--SKIPIF--
<?php
if(substr(PHP_OS, 0, 3) == 'WIN')
  die("skip Not valid on Windows");
?>
--FILE--
<?php
/*
 *  Prototype: float disk_free_space( string directory )
 *  Description: Given a string containing a directory, this function will
 *               return the number of bytes available on the corresponding
 *               filesystem or disk partition
 */

echo "*** Testing error conditions ***\n";
$file_path = dirname(__FILE__);
var_dump( diskfreespace( $file_path, "extra argument") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function diskfreespace(): 1 at most, 2 provided in %s on line %d
 -- compile-error
