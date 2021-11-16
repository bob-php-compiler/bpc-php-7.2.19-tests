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

/* No.of args less than expected */
print( filetype() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function filetype(): 1 required, 0 provided in %s on line %d
 -- compile-error
