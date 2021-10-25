--TEST--
Test convert_uuencode() function : error conditions
--FILE--
<?php

/* Prototype  : string convert_uuencode  ( string $data  )
 * Description: Uuencode a string
 * Source code: ext/standard/uuencode.c
*/

echo "*** Testing convert_uuencode() : error conditions ***\n";

echo "\n-- Testing convert_uuencode() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( convert_uuencode(72, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function convert_uuencode(): 1 at most, 2 provided in %s on line %d
 -- compile-error
