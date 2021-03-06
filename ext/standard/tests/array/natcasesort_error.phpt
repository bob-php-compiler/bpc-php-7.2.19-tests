--TEST--
Test natcasesort() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : bool natcasesort(array &$array_arg)
 * Description: Sort an array using case-insensitive natural sort
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to natcasesort() to test behaviour
 */

echo "*** Testing natcasesort() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing natcasesort() function with Zero arguments --\n";
var_dump( natcasesort() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function natcasesort(): 1 required, 0 provided in %s on line %d
 -- compile-error
