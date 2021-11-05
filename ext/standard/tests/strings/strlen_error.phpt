--TEST--
Test strlen() function :  error conditions
--FILE--
<?php

/* Prototype  : int strlen  ( string $string  )
 * Description: Get string length
 * Source code: ext/standard/string.c
*/

echo "*** Testing strlen() : unexpected number of arguments ***";


echo "\n-- Testing strlen() function with no arguments --\n";
var_dump( strlen() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strlen(): 1 required, 0 provided in %s on line %d
 -- compile-error
