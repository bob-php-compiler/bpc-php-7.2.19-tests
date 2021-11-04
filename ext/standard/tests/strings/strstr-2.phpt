--TEST--
Test strstr() function
--FILE--
<?php
/* Prototype: string strstr ( string $haystack, string $needle );
   Description: Find first occurrence of a string
   and reurns the rest of the string from that string
*/

echo "\n*** Testing error conditions ***";
var_dump( strstr("") );  // null argument

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strstr(): 2 required, 1 provided in %s on line %d
 -- compile-error
