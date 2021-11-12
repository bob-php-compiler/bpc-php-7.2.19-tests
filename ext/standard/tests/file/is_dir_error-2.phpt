--TEST--
Test is_dir() function: error conditions
--FILE--
<?php
/* Prototype: bool is_dir ( string $filename );
 *  Description: Tells whether the filename is a regular file
 *               Returns TRUE if the filename exists and is a regular file
 */

echo "*** Testing is_dir() error conditions ***";

var_dump( is_dir('/tmp', "is_dir_error1") ); // args > expected no.of args

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_dir(): 1 at most, 2 provided in %s on line %d
 -- compile-error
