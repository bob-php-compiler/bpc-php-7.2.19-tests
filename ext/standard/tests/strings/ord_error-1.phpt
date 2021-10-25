--TEST--
Test ord() function : error conditions
--FILE--
<?php

/* Prototype  : int ord  ( string $string  )
 * Description: Return ASCII value of character
 * Source code: ext/standard/string.c
*/

echo "*** Testing ord() : error conditions ***\n";

echo "\n-- Testing ord() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( ord(72, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ord(): 1 at most, 2 provided in %s on line %d
 -- compile-error
