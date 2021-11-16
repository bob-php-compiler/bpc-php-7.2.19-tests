--TEST--
Test fileinode() function: Error conditions
--FILE--
<?php
/*
Prototype: int fileinode ( string $filename );
Description: Returns the inode number of the file, or FALSE in case of an error.
*/

echo "*** Testing error conditions of fileinode() ***";

/* No.of arguments greater than expected */
var_dump( fileinode(__FILE__, "string") );

--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fileinode(): 1 at most, 2 provided in %s on line %d
 -- compile-error
