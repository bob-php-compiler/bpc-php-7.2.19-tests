--TEST--
Test str_shuffle() function : error conditions
--FILE--
<?php

/* Prototype  : string str_shuffle  ( string $str  )
 * Description: Randomly shuffles a string
 * Source code: ext/standard/string.c
*/
echo "*** Testing str_shuffle() : error conditions ***\n";

echo "\n-- Testing str_shuffle() function with no arguments --\n";
var_dump( str_shuffle() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function str_shuffle(): 1 required, 0 provided in %s on line %d
 -- compile-error
