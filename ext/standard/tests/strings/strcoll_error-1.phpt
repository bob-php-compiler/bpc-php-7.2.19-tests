--TEST--
Test strcoll() function : error conditions
--FILE--
<?php
/* Prototype: int strcoll  ( string $str1  , string $str2  )
   Description: Locale based string comparison
*/

echo "*** Testing strcoll() : error conditions ***\n";

echo "\n-- Testing strcoll() function with no arguments --\n";
var_dump( strcoll("") );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strcoll(): 2 required, 1 provided in %s on line %d
 -- compile-error
