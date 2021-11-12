--TEST--
Test of fileowner() function: error conditions
--FILE--
<?php
/* Prototype: int fileowner ( string $filename )
 * Description: Returns the user ID of the owner of the file, or
 *              FALSE in case of an error.
 */

echo "*** Testing fileowner(): error conditions ***\n";

/* Invalid no.of arguments */
var_dump( fileowner("/no/such/file", "root") );  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fileowner(): 1 at most, 2 provided in %s on line %d
 -- compile-error
