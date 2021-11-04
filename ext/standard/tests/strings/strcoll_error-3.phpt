--TEST--
Test strcoll() function : error conditions
--FILE--
<?php
/* Prototype: int strcoll  ( string $str1  , string $str2  )
   Description: Locale based string comparison
*/

echo "*** Testing strcoll() : error conditions ***\n";

echo "\n-- Testing strcoll() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( strcoll("Hello World",  "World", $extra_arg) );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strcoll(): 2 at most, 3 provided in %s on line %d
 -- compile-error
