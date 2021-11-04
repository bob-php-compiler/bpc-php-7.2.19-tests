--TEST--
Test strpos() function
--FILE--
<?php
/* Prototype: int strpos ( string $haystack, mixed $needle [, int $offset] );
   Description: Find position of first occurrence of a string
*/

echo "\n*** Testing error conditions ***";
var_dump( strpos("a", "b", "c", "d") );  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strpos(): 3 at most, 4 provided in %s on line %d
 -- compile-error
