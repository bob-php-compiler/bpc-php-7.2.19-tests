--TEST--
Test quotemeta() function : error conditions
--FILE--
<?php

/* Prototype  : string quotemeta  ( string $str  )
 * Description: Quote meta characters
 * Source code: ext/standard/string.c
*/

echo "*** Testing quotemeta() : error conditions ***\n";

echo "\n-- Testing quotemeta() function with no arguments --\n";
var_dump( quotemeta());

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function quotemeta(): 1 required, 0 provided in %s on line %d
 -- compile-error
