--TEST--
Test ucwords() function : error conditions
--FILE--
<?php
/* Prototype  : string ucwords ( string $str )
 * Description: Uppercase the first character of each word in a string
 * Source code: ext/standard/string.c
*/

echo "*** Testing ucwords() : error conditions ***\n";

// Zero argument
echo "\n-- Testing ucwords() function with Zero arguments --\n";
var_dump( ucwords() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ucwords(): 1 required, 0 provided in %s on line %d
 -- compile-error
