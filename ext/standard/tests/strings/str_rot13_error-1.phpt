--TEST--
Test str_rot13() function : error conditions
--FILE--
<?php
/* Prototype  : string str_rot13  ( string $str  )
 * Description: Perform the rot13 transform on a string
 * Source code: ext/standard/string.c
*/
echo "*** Testing str_rot13() : error conditions ***\n";

echo "\n\n-- Testing str_rot13() function with more than expected no. of arguments --\n";
$str = "str_rot13() tests starting";
$extra_arg = 10;
var_dump( str_rot13( $str, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function str_rot13(): 1 at most, 2 provided in %s on line %d
 -- compile-error
