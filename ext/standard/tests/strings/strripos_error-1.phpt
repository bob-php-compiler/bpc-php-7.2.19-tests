--TEST--
Test strripos() function : error conditions
--FILE--
<?php
/* Prototype  : int strripos ( string $haystack, string $needle [, int $offset] );
 * Description: Find position of last occurrence of a case-insensitive 'needle' in a 'haystack'
 * Source code: ext/standard/string.c
*/

echo "*** Testing strripos() function: error conditions ***";

echo "\n-- With less than expected number of arguments --";
var_dump( strripos("String") );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strripos(): 2 required, 1 provided in %s on line %d
 -- compile-error
