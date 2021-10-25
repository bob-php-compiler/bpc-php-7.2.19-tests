--TEST--
Test ord() function : error conditions
--FILE--
<?php

/* Prototype  : int ord  ( string $string  )
 * Description: Return ASCII value of character
 * Source code: ext/standard/string.c
*/

echo "*** Testing ord() : error conditions ***\n";

echo "\n-- Testing ord() function with no arguments --\n";
var_dump( ord() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ord(): 1 required, 0 provided in %s on line %d
 -- compile-error
