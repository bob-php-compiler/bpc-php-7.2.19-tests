--TEST--
Test filegroup() function: error conditions
--FILE--
<?php
/* Prototype: int filegroup ( string $filename )
 *  Description: Returns the group ID of the file, or FALSE in case of an error.
 */

echo "*** Testing filegroup(): error conditions ***\n";

/* Invalid no.of arguments */
var_dump( filegroup("/no/such/file", "root") );  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function filegroup(): 1 at most, 2 provided in %s on line %d
 -- compile-error
