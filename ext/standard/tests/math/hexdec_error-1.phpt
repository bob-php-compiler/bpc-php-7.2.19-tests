--TEST--
Test hexdec() - wrong params test hexdec()
--FILE--
<?php
/* Prototype  : number hexdec  ( string $hex_string  )
 * Description: Returns the decimal equivalent of the hexadecimal number represented by the hex_string  argument.
 * Source code: ext/standard/math.c
 */

echo "*** Testing hexdec() :  error conditions ***\n";

echo "\n-- Incorrect number of arguments --\n";
hexdec();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hexdec(): 1 required, 0 provided in %s on line %d
 -- compile-error
