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
$file_path = '.';

var_dump( disk_free_space( $file_path."/dir1" )); // Invalid directory
var_dump( diskfreespace( $file_path."/dir1" ));

$fh = fopen( $file_path."/disk_free_space.tmp", "w" );
fwrite( $fh, " Garbage data for the temporary file" );
var_dump( disk_free_space( $file_path."/disk_free_space.tmp" )); // file input instead of directory
var_dump( diskfreespace( $file_path."/disk_free_space.tmp" ));
fclose($fh);

echo"\n-- Done --";
?>
--CLEAN--
<?php
$file_path = '.';
unlink($file_path."/disk_free_space.tmp");

?>
--EXPECTF--
*** Testing error conditions ***

Warning: disk_free_space(): No such file or directory in %s on line %d
bool(false)

Warning: disk_free_space(): No such file or directory in %s on line %d
bool(false)
float(%d)
float(%d)

-- Done --
