--TEST--
Test rename() function: error conditions
--FILE--
<?php
/* Prototype: bool rename ( string $oldname, string $newname [, resource $context] );
   Description: Renames a file or directory
*/

echo "*** Testing rename() for error conditions ***\n";

// less than expected,1 argument
var_dump( rename(__FILE__) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function rename(): 2 required, 1 provided in %s on line %d
 -- compile-error
