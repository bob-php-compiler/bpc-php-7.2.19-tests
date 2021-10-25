--TEST--
Test bin2hex() function : error conditions
--FILE--
<?php

/* Prototype  : string bin2hex  ( string $str  )
 * Description: Convert binary data into hexadecimal representation
 * Source code: ext/standard/string.c
*/

echo "*** Testing bin2hex() : error conditions ***\n";

echo "\n-- Testing bin2hex() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( bin2hex("Hello World", $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function bin2hex(): 1 at most, 2 provided in %s on line %d
 -- compile-error
