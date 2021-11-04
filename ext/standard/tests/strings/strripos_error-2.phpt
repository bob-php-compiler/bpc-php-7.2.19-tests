--TEST--
Test strripos() function : error conditions
--FILE--
<?php
/* Prototype  : int strripos ( string $haystack, string $needle [, int $offset] );
 * Description: Find position of last occurrence of a case-insensitive 'needle' in a 'haystack'
 * Source code: ext/standard/string.c
*/

echo "*** Testing strripos() function: error conditions ***";

echo "\n-- With more than expected number of arguments --";
var_dump( strripos("string", "String", 1, 'extra_arg') );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strripos(): 3 at most, 4 provided in %s on line %d
 -- compile-error
