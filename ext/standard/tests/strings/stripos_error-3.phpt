--TEST--
Test stripos() function : error conditions
--FILE--
<?php
/* Prototype  : int stripos ( string $haystack, string $needle [, int $offset] );
 * Description: Find position of first occurrence of a case-insensitive string
 * Source code: ext/standard/string.c
*/

echo "*** Testing stripos() function: error conditions ***\n";

echo "\n-- With more than expected number of arguments --";
var_dump( stripos("string", "String", 1, 'extra_arg') );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function stripos(): 3 at most, 4 provided in %s on line %d
 -- compile-error
