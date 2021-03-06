--TEST--
Test sort() function : error conditions
--FILE--
<?php
/* Prototype  : bool sort(array &array_arg [, int sort_flags])
 * Description: Sort an array
 * Source code: ext/standard/array.c
*/

/*
* Testing sort() function with all possible error conditions
*/

echo "*** Testing sort() : error conditions ***\n";

// zero arguments
echo "\n-- Testing sort() function with Zero arguments --\n";
var_dump( sort() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sort(): 1 required, 0 provided in %s on line %d
 -- compile-error
