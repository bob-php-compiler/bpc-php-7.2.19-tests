--TEST--
Test readfile() function: error conditions
--FILE--
<?php
/* Prototype: int readfile ( string $filename [, bool $use_include_path [, resource $context]] );
   Description: Outputs a file
*/

echo "*** Test readfile(): error conditions ***\n";
echo "-- Testing readfile() with unexpected no. of arguments --\n";
var_dump( readfile() );  // args < expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function readfile(): 1 required, 0 provided in %s on line %d
 -- compile-error
