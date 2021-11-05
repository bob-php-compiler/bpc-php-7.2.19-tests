--TEST--
Test strlen() function :  error conditions
--FILE--
<?php

/* Prototype  : int strlen  ( string $string  )
 * Description: Get string length
 * Source code: ext/standard/string.c
*/

echo "*** Testing strlen() : unexpected number of arguments ***";


echo "\n-- Testing strlen() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( strlen("abc def", $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strlen(): 1 at most, 2 provided in %s on line %d
 -- compile-error
