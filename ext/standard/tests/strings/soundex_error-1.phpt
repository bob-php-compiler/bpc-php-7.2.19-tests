--TEST--
Test soundex() function : error conditions
--FILE--
<?php
/* Prototype  : string soundex  ( string $str  )
 * Description: Calculate the soundex key of a string
 * Source code: ext/standard/string.c
*/

echo "\n*** Testing soundex error conditions ***";

echo "\n\n-- Testing soundex() function with more than expected no. of arguments --\n";
$str = "Euler";
$extra_arg = 10;
var_dump( soundex( $str, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function soundex(): 1 at most, 2 provided in %s on line %d
 -- compile-error
