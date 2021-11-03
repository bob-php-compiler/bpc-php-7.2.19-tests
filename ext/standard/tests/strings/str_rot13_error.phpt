--TEST--
Test str_rot13() function : error conditions
--FILE--
<?php
/* Prototype  : string str_rot13  ( string $str  )
 * Description: Perform the rot13 transform on a string
 * Source code: ext/standard/string.c
*/
echo "*** Testing str_rot13() : error conditions ***\n";

echo "-- Testing str_rot13() function with Zero arguments --\n";
var_dump( str_rot13() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function str_rot13(): 1 required, 0 provided in %s on line %d
 -- compile-error
