--TEST--
Test sha1() function : error conditions
--FILE--
<?php


/* Prototype: string sha1  ( string $str  [, bool $raw_output  ] )
 * Description: Calculate the sha1 hash of a string
 */

echo "*** Testing sha1() : error conditions ***\n";

echo "\n-- Testing sha1() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( sha1("Hello World",  true, $extra_arg) );


?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function sha1(): 2 at most, 3 provided in %s on line %d
 -- compile-error
