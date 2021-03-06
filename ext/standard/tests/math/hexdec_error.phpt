--TEST--
Test hexdec() - wrong params test hexdec()
--FILE--
<?php
/* Prototype  : number hexdec  ( string $hex_string  )
 * Description: Returns the decimal equivalent of the hexadecimal number represented by the hex_string  argument.
 * Source code: ext/standard/math.c
 */

echo "*** Testing hexdec() :  error conditions ***\n";

// get a class
class classA
{
}

echo "\n-- Incorrect input --\n";
hexdec(new classA());

?>
--EXPECTF--
*** Testing hexdec() :  error conditions ***

-- Incorrect input --

Recoverable fatal error: Object of class classA could not be converted to string in %s on line %d
