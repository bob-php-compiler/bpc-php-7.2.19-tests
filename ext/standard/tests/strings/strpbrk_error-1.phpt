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
$char_list = 'string_val';
$extra_arg = 10;

echo "\n-- Testing strpbrk() function with more than expected no. of arguments --\n";
var_dump( strpbrk($haystack, $char_list, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strpbrk(): 2 at most, 3 provided in %s on line %d
 -- compile-error
