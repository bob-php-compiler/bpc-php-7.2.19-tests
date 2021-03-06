--TEST--
Test chunk_split() function : error conditions
--FILE--
<?php
/* Prototype  : string chunk_split(string $str [, int $chunklen [, string $ending]])
 * Description: Returns split line
 * Source code: ext/standard/string.c
 * Alias to functions: none
*/

/*
* Testing error conditions of chunk_split() with zero arguments
* and for more than expected number of arguments
*/

echo "*** Testing chunk_split() : error conditions ***\n";

// Zero arguments
echo "-- Testing chunk_split() function with Zero arguments --";
var_dump( chunk_split() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function chunk_split(): 1 required, 0 provided in %s on line %d
 -- compile-error
