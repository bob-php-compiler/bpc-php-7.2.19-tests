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

// more than expected no. of arguments
var_dump( basename("/var/tmp/bar.gz", ".gz", ".gz") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function basename(): 2 at most, 3 provided in %s on line %d
 -- compile-error
