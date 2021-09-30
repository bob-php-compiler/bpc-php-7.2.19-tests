--TEST--
Test array_chunk() function : error conditions
--FILE--
<?php
/* Prototype  : array array_chunk(array input, int size [, bool preserve_keys])
 * Description: Split array into chunks
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_chunk() : error conditions ***\n";

echo "\n-- Testing array_chunk() function with more than expected no. of arguments --\n";
$input = array(1, 2);
$size = 10;
$preserve_keys = true;
$extra_arg = 10;
var_dump( array_chunk($input,$size,$preserve_keys, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_chunk(): 3 at most, 4 provided in %s on line %d
 -- compile-error
