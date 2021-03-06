--TEST--
Test nl2br() function : error conditions
--FILE--
<?php
/* Prototype  : string nl2br(string $str)
 * Description: Inserts HTML line breaks before all newlines in a string.
 * Source code: ext/standard/string.c
*/

echo "*** Testing nl2br() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing nl2br() function with Zero arguments --";
var_dump( nl2br() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function nl2br(): 1 required, 0 provided in %s on line %d
 -- compile-error
