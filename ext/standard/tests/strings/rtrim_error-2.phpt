--TEST--
Test rtrim() function : error conditions
--FILE--
<?php

/* Prototype  : string rtrim  ( string $str  [, string $charlist  ] )
 * Description: Strip whitespace (or other characters) from the end of a string.
 * Source code: ext/standard/string.c
*/


echo "*** Testing rtrim() : error conditions ***\n";

echo "\n-- Testing rtrim() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( rtrim("Hello World",  "Heo", $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function rtrim(): 2 at most, 3 provided in %s on line %d
 -- compile-error
