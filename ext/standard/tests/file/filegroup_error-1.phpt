--TEST--
Test filegroup() function: error conditions
--FILE--
<?php
/* Prototype: int filegroup ( string $filename )
 *  Description: Returns the group ID of the file, or FALSE in case of an error.
 */

echo "*** Testing filegroup(): error conditions ***\n";

/* Invalid no.of arguments */
var_dump( filegroup() );  // args < expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function filegroup(): 1 required, 0 provided in %s on line %d
 -- compile-error
