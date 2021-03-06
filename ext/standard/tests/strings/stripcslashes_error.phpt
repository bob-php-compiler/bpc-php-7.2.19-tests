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


echo "\n-- Testing stripcslashes() function with no arguments --\n";
var_dump( stripcslashes() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function stripcslashes(): 1 required, 0 provided in %s on line %d
 -- compile-error
