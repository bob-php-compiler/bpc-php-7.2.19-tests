--TEST--
Test str_split() function : error conditions
--FILE--
<?php
/* Prototype  : array str_split(string $str [, int $split_length])
 * Description: Convert a string to an array. If split_length is
                specified, break the string down into chunks each
                split_length characters long.
 * Source code: ext/standard/string.c
 * Alias to functions: none
*/

echo "*** Testing str_split() : error conditions ***\n";

// Zero arguments
echo "-- Testing str_split() function with Zero arguments --\n";
var_dump( str_split() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function str_split(): 1 required, 0 provided in %s on line %d
 -- compile-error
