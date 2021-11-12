--TEST--
Test is_file() function: error conditions
--FILE--
<?php
/* Prototype: bool is_file ( string $filename );
   Description: Tells whether the filename is a regular file
                Returns TRUE if the filename exists and is a regular file
*/

echo "*** Testing is_file() error conditions ***";
var_dump( is_file() );  // Zero No. of args

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_file(): 1 required, 0 provided in %s on line %d
 -- compile-error
