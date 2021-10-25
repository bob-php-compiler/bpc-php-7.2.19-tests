--TEST--
Test convert_uudecode() function : error conditions
--FILE--
<?php

/* Prototype  : string convert_uudecode  ( string $data  )
 * Description: Decode a uuencoded string
 * Source code: ext/standard/uuencode.c
*/

echo "*** Testing convert_uudecode() : error conditions ***\n";

echo "\n-- Testing convert_uudecode() function with no arguments --\n";
var_dump( convert_uudecode() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function convert_uudecode(): 1 required, 0 provided in %s on line %d
 -- compile-error
