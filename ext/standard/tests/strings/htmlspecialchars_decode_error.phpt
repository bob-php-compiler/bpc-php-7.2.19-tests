--TEST--
Test htmlspecialchars_decode() function : error conditions
--FILE--
<?php
/* Prototype  : string htmlspecialchars_decode(string $string [, int $quote_style])
 * Description: Convert special HTML entities back to characters
 * Source code: ext/standard/html.c
*/

echo "*** Testing htmlspecialchars_decode() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing htmlspecialchars_decode() function with Zero arguments --\n";
var_dump( htmlspecialchars_decode() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function htmlspecialchars_decode(): 1 required, 0 provided in %s on line %d
 -- compile-error
