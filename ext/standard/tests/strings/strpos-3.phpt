--TEST--
Test strpos() function
--FILE--
<?php
/* Prototype: int strpos ( string $haystack, mixed $needle [, int $offset] );
   Description: Find position of first occurrence of a string
*/

echo "\n*** Testing error conditions ***";
$string = 'string';
var_dump( strpos($string) );  // without "needle"

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strpos(): 2 required, 1 provided in %s on line %d
 -- compile-error
