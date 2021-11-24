--TEST--
Test tempnam() function: error conditions
--FILE--
<?php
/* Prototype:  string tempnam ( string $dir, string $prefix );
   Description: Create file with unique file name.
*/

echo "*** Testing tempnam() error conditions ***\n";

/* Less number of arguments than expected */
var_dump( tempnam() );  //Zero args

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function tempnam(): 2 required, 0 provided in %s on line %d
 -- compile-error
