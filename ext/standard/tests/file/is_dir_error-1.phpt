--TEST--
Test is_dir() function: error conditions
--FILE--
<?php
/* Prototype: bool is_dir ( string $filename );
 *  Description: Tells whether the filename is a regular file
 *               Returns TRUE if the filename exists and is a regular file
 */

echo "*** Testing is_dir() error conditions ***";
var_dump( is_dir() );  // Zero No. of args

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_dir(): 1 required, 0 provided in %s on line %d
 -- compile-error
