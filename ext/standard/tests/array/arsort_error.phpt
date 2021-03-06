--TEST--
Test arsort() function : error conditions
--FILE--
<?php
/* Prototype  : bool arsort(array &array_arg [, int sort_flags])
 * Description: Sort an array
 * Source code: ext/standard/array.c
*/

/*
* Testing arsort() function with all possible error conditions
*/

echo "*** Testing arsort() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing arsort() function with Zero arguments --\n";
var_dump( arsort() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function arsort(): 1 required, 0 provided in %s on line %d
 -- compile-error
