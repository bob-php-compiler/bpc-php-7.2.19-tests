--TEST--
Test soundex() function : error conditions
--FILE--
<?php
/* Prototype  : string soundex  ( string $str  )
 * Description: Calculate the soundex key of a string
 * Source code: ext/standard/string.c
*/

echo "\n*** Testing soundex error conditions ***";

echo "-- Testing soundex() function with Zero arguments --\n";
var_dump( soundex() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function soundex(): 1 required, 0 provided in %s on line %d
 -- compile-error
