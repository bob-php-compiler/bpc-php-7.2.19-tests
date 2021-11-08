--TEST--
Test dirname() function : error conditions
--FILE--
<?php
/* Prototype: string dirname ( string $path );
   Description: Returns directory name component of path.
*/
echo "*** Testing error conditions ***\n";
// zero arguments
var_dump( dirname() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function dirname(): 1 required, 0 provided in %s on line %d
 -- compile-error
