--TEST--
Test fscanf() function: error conditions
--FILE--
<?php
/*
  Prototype: mixed fscanf ( resource $handle, string $format [, mixed &$...] );
  Description: Parses input from a file according to a format
*/

echo "*** Testing fscanf() for error conditions ***\n";

// zero argument
var_dump( fscanf() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fscanf(): 2 required, 0 provided in %s on line %d
 -- compile-error
