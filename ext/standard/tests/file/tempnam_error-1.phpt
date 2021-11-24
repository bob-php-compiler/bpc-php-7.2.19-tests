--TEST--
Test tempnam() function: error conditions
--FILE--
<?php
/* Prototype:  string tempnam ( string $dir, string $prefix );
   Description: Create file with unique file name.
*/

echo "*** Testing tempnam() error conditions ***\n";
$file_path = dirname(__FILE__);

/* More number of arguments than expected */
var_dump( tempnam("$file_path", "tempnam_error.tmp", TRUE) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function tempnam(): 2 at most, 3 provided in %s on line %d
 -- compile-error
