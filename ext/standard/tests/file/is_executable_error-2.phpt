--TEST--
Test is_executable() function: error conditions
--FILE--
<?php
/* Prototype: bool is_executable ( string $filename );
   Description: Tells whether the filename is executable
*/

echo "*** Testing is_executable(): error conditions ***\n";

var_dump( is_executable(1, 2) );  // args > expected no. of arguments

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_executable(): 1 at most, 2 provided in %s on line %d
 -- compile-error
