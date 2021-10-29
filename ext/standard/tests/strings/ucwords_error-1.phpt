--TEST--
Test ucwords() function : error conditions
--FILE--
<?php
/* Prototype  : string ucwords ( string $str )
 * Description: Uppercase the first character of each word in a string
 * Source code: ext/standard/string.c
*/

echo "*** Testing ucwords() : error conditions ***\n";

// More than expected number of arguments
echo "\n-- Testing ucwords() function with more than expected no. of arguments --\n";
$str = 'string_val';
$extra_arg = 10;

var_dump( ucwords($str, $extra_arg, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ucwords(): 2 at most, 3 provided in %s on line %d
 -- compile-error
