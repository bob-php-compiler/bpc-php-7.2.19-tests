--TEST--
Test strpbrk() function : error conditions
--FILE--
<?php
/* Prototype  : array strpbrk(string haystack, string char_list)
 * Description: Search a string for any of a set of characters
 * Source code: ext/standard/string.c
 * Alias to functions:
 */

echo "*** Testing strpbrk() : error conditions ***\n";

$haystack = 'This is a Simple text.';

echo "\n-- Testing strpbrk() function with less than expected no. of arguments --\n";
var_dump( strpbrk($haystack) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strpbrk(): 2 required, 1 provided in %s on line %d
 -- compile-error
