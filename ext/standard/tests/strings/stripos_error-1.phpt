--TEST--
Test stripos() function : error conditions
--FILE--
<?php
/* Prototype  : int stripos ( string $haystack, string $needle [, int $offset] );
 * Description: Find position of first occurrence of a case-insensitive string
 * Source code: ext/standard/string.c
*/

echo "*** Testing stripos() function: error conditions ***\n";
echo "\n-- With Zero arguments --";
var_dump( stripos() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function stripos(): 2 required, 0 provided in %s on line %d
 -- compile-error
