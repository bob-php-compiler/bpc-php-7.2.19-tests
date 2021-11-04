--TEST--
Test strrpos() function : error conditions
--FILE--
<?php
/* Prototype  : int strrpos ( string $haystack, string $needle [, int $offset] );
 * Description: Find position of last occurrence of 'needle' in 'haystack'.
 * Source code: ext/standard/string.c
*/

echo "*** Testing strrpos() function: error conditions ***";
echo "\n-- With Zero arguments --";
var_dump( strrpos() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strrpos(): 2 required, 0 provided in %s on line %d
 -- compile-error
