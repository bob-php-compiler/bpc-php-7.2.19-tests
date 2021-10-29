--TEST--
similar_text(), error tests for missing parameters
--CREDITS--
Mats Lindh <mats at lindh.no>
#Testfest php.no
--FILE--
<?php
/* Prototype  : proto int similar_text(string str1, string str2 [, float percent])
* Description: Calculates the similarity between two strings
* Source code: ext/standard/string.c
*/

echo "\n-- Testing similar_text() function with less than expected no. of arguments --\n";
similar_text("abc");
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function similar_text(): 2 required, 1 provided in %s on line %d
 -- compile-error
