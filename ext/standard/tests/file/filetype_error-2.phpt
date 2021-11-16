--TEST--
Test filetype() function: Error conditions
--FILE--
<?php
/*
Prototype: string filetype ( string $filename );
Description: Returns the type of the file. Possible values are fifo, char,
             dir, block, link, file, and unknown.
*/

echo "*** Testing error conditions ***";

/* No.of args greater than expected */
print( filetype("file", "file") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function filetype(): 1 at most, 2 provided in %s on line %d
 -- compile-error
