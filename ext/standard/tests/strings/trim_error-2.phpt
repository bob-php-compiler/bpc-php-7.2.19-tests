--TEST--
Test trim() function : error conditions
--FILE--
<?php

/* Prototype  : string trim  ( string $str  [, string $charlist  ] )
 * Description: Strip whitespace (or other characters) from the beginning and end of a string.
 * Source code: ext/standard/string.c
*/


echo "*** Testing trim() : error conditions ***\n";

echo "\n-- Testing trim() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( trim("Hello World",  "Heo", $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function trim(): 2 at most, 3 provided in %s on line %d
 -- compile-error
