--TEST--
Test substr_replace() function : error conditions
--FILE--
<?php
/* Prototype  : mixed substr_replace  ( mixed $string  , string $replacement  , int $start  [, int $length  ] )
 * Description: Replace text within a portion of a string
 * Source code: ext/standard/string.c
*/

/*
 * Testing substr_replace() for error conditions
*/

echo "*** Testing substr_replace() : error conditions ***\n";

echo "\n-- Testing substr_replace() function with less than expected no. of arguments --\n";
var_dump(substr_replace());

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function substr_replace(): 3 required, 0 provided in %s on line %d
 -- compile-error
