--TEST--
Test str_shuffle() function : error conditions
--FILE--
<?php

/* Prototype  : string str_shuffle  ( string $str  )
 * Description: Randomly shuffles a string
 * Source code: ext/standard/string.c
*/
echo "*** Testing str_shuffle() : error conditions ***\n";

echo "\n-- Testing str_shuffle() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( str_shuffle("Hello World", $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function str_shuffle(): 1 at most, 2 provided in %s on line %d
 -- compile-error
