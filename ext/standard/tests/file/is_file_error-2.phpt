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
/* no of args > expected */
var_dump( is_file( $file_path."/is_file_error.tmp", $file_path."/is_file_error1.tmp") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_file(): 1 at most, 2 provided in %s on line %d
 -- compile-error
