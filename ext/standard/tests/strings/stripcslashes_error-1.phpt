--TEST--
Test stripcslashes() function :  error conditions
--FILE--
<?php

/* Prototype  : string stripcslashes  ( string $str  )
 * Description: Returns a string with backslashes stripped off. Recognizes C-like \n, \r ...,
 *              octal and hexadecimal representation.
 * Source code: ext/standard/string.c
*/

echo "*** Testing stripcslashes() : unexpected number of arguments ***";


echo "\n-- Testing stripcslashes() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( stripcslashes("abc def", $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function stripcslashes(): 1 at most, 2 provided in %s on line %d
 -- compile-error
