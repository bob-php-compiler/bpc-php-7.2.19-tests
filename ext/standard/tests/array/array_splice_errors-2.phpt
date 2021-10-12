--TEST--
Test array_splice() function : error conditions
--FILE--
<?php
/*
 * proto array array_splice(array input, int offset [, int length [, array replacement]])
 * Function is implemented in ext/standard/array.c
*/

echo "\n*** Testing error conditions of array_splice() ***\n";

$int=1;
var_dump (array_splice($int));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_splice(): 2 required, 1 provided in %s on line %d
 -- compile-error
