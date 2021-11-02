--TEST--
Test quotemeta() function : error conditions
--FILE--
<?php

/* Prototype  : string quotemeta  ( string $str  )
 * Description: Quote meta characters
 * Source code: ext/standard/string.c
*/

echo "*** Testing quotemeta() : error conditions ***\n";

echo "\n-- Testing quotemeta() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump(quotemeta("How are you ?", $extra_arg));

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function quotemeta(): 1 at most, 2 provided in %s on line %d
 -- compile-error
