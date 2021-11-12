--TEST--
Test is_readable() function: error conditions
--FILE--
<?php
/* Prototype: bool is_readable ( string $filename );
   Description: Tells whether the filename is readable
*/

echo "*** Testing is_readable(): error conditions ***\n";
var_dump( is_readable(1, 2) );  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_readable(): 1 at most, 2 provided in %s on line %d
 -- compile-error
