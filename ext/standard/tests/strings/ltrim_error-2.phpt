--TEST--
Test ltrim() function : error conditions
--FILE--
<?php

/* Prototype  : string ltrim  ( string $str  [, string $charlist  ] )
 * Description: Strip whitespace (or other characters) from the beginning of a string.
 * Source code: ext/standard/string.c
*/


echo "*** Testing ltrim() : error conditions ***\n";

echo "\n-- Testing ltrim() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( ltrim("Hello World",  "Heo", $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ltrim(): 2 at most, 3 provided in %s on line %d
 -- compile-error
