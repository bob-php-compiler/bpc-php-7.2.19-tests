--TEST--
Test sha1() function : error conditions
--FILE--
<?php


/* Prototype: string sha1  ( string $str  [, bool $raw_output  ] )
 * Description: Calculate the sha1 hash of a string
 */

echo "*** Testing sha1() : error conditions ***\n";

echo "\n-- Testing sha1() function with no arguments --\n";
var_dump( sha1() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sha1(): 1 required, 0 provided in %s on line %d
 -- compile-error
