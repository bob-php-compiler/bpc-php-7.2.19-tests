--TEST--
Test strrpos() function : error conditions
--FILE--
<?php
/* Prototype  : int strrpos ( string $haystack, string $needle [, int $offset] );
 * Description: Find position of last occurrence of 'needle' in 'haystack'.
 * Source code: ext/standard/string.c
*/

echo "*** Testing strrpos() function: error conditions ***";

echo "\n-- With more than expected number of arguments --";
var_dump( strrpos("string", "String", 1, 'extra_arg') );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strrpos(): 3 at most, 4 provided in %s on line %d
 -- compile-error
