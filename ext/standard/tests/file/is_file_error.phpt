--TEST--
Test is_file() function: error conditions
--FILE--
<?php
/* Prototype: bool is_file ( string $filename );
   Description: Tells whether the filename is a regular file
                Returns TRUE if the filename exists and is a regular file
*/

echo "*** Testing is_file() error conditions ***";
$file_path = '.';
$file_handle = fopen($file_path."/is_file_error.tmp", "w");

/* Non-existing file */
var_dump( is_file($file_path."/is_file_error1.tmp") );

/* Passing resource as an argument */
var_dump( is_file($file_handle) );

fclose($file_handle);

echo "\n*** Done ***";
?>
--CLEAN--
<?php
$file_path = '.';
if(file_exists($file_path."/is_file_error.tmp")) {
  unlink($file_path."/is_file_error.tmp");
}
if(file_exists($file_path."/is_file_error1.tmp")) {
  unlink($file_path."/is_file_error1.tmp");
}
?>
--EXPECTF--
*** Testing is_file() error conditions ***bool(false)

Warning: is_file() expects parameter 1 to be a valid path, resource given in %s on line %d
NULL

*** Done ***
