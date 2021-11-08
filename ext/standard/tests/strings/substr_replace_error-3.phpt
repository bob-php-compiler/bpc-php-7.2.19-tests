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

$s1 = "Good morning";

echo "\n-- Testing substr_replace() function with more than expected no. of arguments --\n";
var_dump(substr_replace($s1, "evening", 5, 7, true));

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function substr_replace(): 4 at most, 5 provided in %s on line %d
 -- compile-error
