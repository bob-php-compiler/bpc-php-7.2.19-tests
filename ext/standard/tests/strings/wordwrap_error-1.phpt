--TEST--
Test wordwrap() function : error conditions
--FILE--
<?php
/* Prototype  : string wordwrap ( string $str [, int $width [, string $break [, bool $cut]]] )
 * Description: Wraps buffer to selected number of characters using string break char
 * Source code: ext/standard/string.c
*/

echo "*** Testing wordwrap() : error conditions ***\n";

// Zero argument
echo "\n-- Testing wordwrap() function with Zero arguments --\n";
var_dump( wordwrap() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function wordwrap(): 1 required, 0 provided in %s on line %d
 -- compile-error
