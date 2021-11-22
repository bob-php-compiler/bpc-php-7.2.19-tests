--TEST--
Test readfile() function: error conditions
--FILE--
<?php
/* Prototype: int readfile ( string $filename [, bool $use_include_path [, resource $context]] );
   Description: Outputs a file
*/

$context = stream_context_create();

echo "*** Test readfile(): error conditions ***\n";
echo "-- Testing readfile() with unexpected no. of arguments --\n";
var_dump( readfile(__FILE__, true, $context, 4) );  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function readfile(): 3 at most, 4 provided in %s on line %d
 -- compile-error
