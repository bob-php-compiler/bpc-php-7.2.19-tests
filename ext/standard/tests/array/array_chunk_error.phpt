--TEST--
Test array_chunk() function : error conditions
--FILE--
<?php
/* Prototype  : array array_chunk(array input, int size [, bool preserve_keys])
 * Description: Split array into chunks
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_chunk() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing array_chunk() function with zero arguments --\n";
var_dump( array_chunk() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_chunk(): 2 required, 0 provided in %s on line %d
 -- compile-error
