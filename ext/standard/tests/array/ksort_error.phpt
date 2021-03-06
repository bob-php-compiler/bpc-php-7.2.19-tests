--TEST--
Test ksort() function : error conditions
--FILE--
<?php
/* Prototype  : bool ksort(array &array_arg [, int sort_flags])
 * Description: Sort an array by key, maintaining key to data correlation
 * Source code: ext/standard/array.c
*/

/*
* Testing ksort() function with all possible error conditions
*/

echo "*** Testing ksort() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing ksort() function with Zero arguments --\n";
var_dump( ksort() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ksort(): 1 required, 0 provided in %s on line %d
 -- compile-error
