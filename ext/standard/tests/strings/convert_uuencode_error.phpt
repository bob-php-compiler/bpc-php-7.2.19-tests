--TEST--
Test convert_uuencode() function : error conditions
--FILE--
<?php

/* Prototype  : string convert_uuencode  ( string $data  )
 * Description: Uuencode a string
 * Source code: ext/standard/uuencode.c
*/

echo "*** Testing convert_uuencode() : error conditions ***\n";

echo "\n-- Testing chconvert_uuencoder() function with no arguments --\n";
var_dump( convert_uuencode() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function convert_uuencode(): 1 required, 0 provided in %s on line %d
 -- compile-error
