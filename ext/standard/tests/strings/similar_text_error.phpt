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

$extra_arg = 10;
echo "\n-- Testing similar_text() function with more than expected no. of arguments --\n";
similar_text("abc", "def", $percent, $extra_arg);

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function similar_text(): 3 at most, 4 provided in %s on line %d
 -- compile-error
