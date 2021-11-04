--TEST--
Test strstr() function
--FILE--
<?php
/* Prototype: string strstr ( string $haystack, string $needle );
   Description: Find first occurrence of a string
   and reurns the rest of the string from that string
*/

echo "\n*** Testing error conditions ***";
$string = "string";
var_dump( strstr($string) );  // without "needle"

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strstr(): 2 required, 1 provided in %s on line %d
 -- compile-error
