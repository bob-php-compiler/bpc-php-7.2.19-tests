--TEST--
Test fileinode() function: Error conditions
--FILE--
<?php
/*
Prototype: int fileinode ( string $filename );
Description: Returns the inode number of the file, or FALSE in case of an error.
*/

echo "*** Testing error conditions of fileinode() ***";

/* No.of arguments less than expected */
var_dump( fileinode() );

--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fileinode(): 1 required, 0 provided in %s on line %d
 -- compile-error
