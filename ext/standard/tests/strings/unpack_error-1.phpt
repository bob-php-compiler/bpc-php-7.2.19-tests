--TEST--
Test unpack() function : error conditions
--FILE--
<?php

/* Prototype  : array unpack  ( string $format  , string $data  )
 * Description: Unpack data from binary string
 * Source code: ext/standard/pack.c
*/

echo "*** Testing unpack() : error conditions ***\n";

echo "\n-- Testing unpack() function with no arguments --\n";
var_dump( unpack() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function unpack(): 2 required, 0 provided in %s on line %d
 -- compile-error
