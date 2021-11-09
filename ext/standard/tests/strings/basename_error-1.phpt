--TEST--
Test basename() function : error conditions
--FILE--
<?php
/* Prototype: string basename ( string $path [, string $suffix] );
   Description: Given a string containing a path to a file,
                this function will return the base name of the file.
                If the filename ends in suffix this will also be cut off.
*/
echo "*** Testing error conditions ***\n";
// zero arguments
var_dump( basename() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function basename(): 1 required, 0 provided in %s on line %d
 -- compile-error
