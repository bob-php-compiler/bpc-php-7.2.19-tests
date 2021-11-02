--TEST--
Test quoted_printable_decode() function : error conditions
--FILE--
<?php
/* Prototype  : string quoted_printable_decode  ( string $str  )
 * Description: Convert a quoted-printable string to an 8 bit string
 * Source code: ext/standard/string.c
*/

echo "*** Testing quoted_printable_decode() : error conditions ***\n";

echo "\n-- Testing quoted_printable_decode() function with no arguments --\n";
var_dump( quoted_printable_decode() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function quoted_printable_decode(): 1 required, 0 provided in %s on line %d
 -- compile-error
