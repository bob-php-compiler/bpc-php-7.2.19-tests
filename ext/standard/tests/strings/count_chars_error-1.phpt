--TEST--
Test count_chars() function : error conditions
--FILE--
<?php

/* Prototype  : mixed count_chars  ( string $string  [, int $mode  ] )
 * Description: Return information about characters used in a string
 * Source code: ext/standard/string.c
*/

echo "*** Testing count_chars() : error conditions ***\n";

echo "\n-- Testing count_chars() function with more than expected no. of arguments --\n";
$string = "Hello World\n";
$mode = 1;
$extra_arg = 10;
var_dump( count_chars($string, $mode, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function count_chars(): 2 at most, 3 provided in %s on line %d
 -- compile-error
