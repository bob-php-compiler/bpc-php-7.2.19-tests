--TEST--
Test array_splice() function : usage variations - additional parameters
--FILE--
<?php
/*
 * proto array array_splice(array input, int offset [, int length [, array replacement]])
 * Function is implemented in ext/standard/array.c
*/

$array=array(0,1,2);
var_dump (array_splice($array,1,1,3,4,5,6,7,8,9));
var_dump ($array);
echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_splice(): 4 at most, 10 provided in %s on line %d
 -- compile-error
