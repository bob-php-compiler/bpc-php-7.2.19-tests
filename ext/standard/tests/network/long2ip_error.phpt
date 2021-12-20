--TEST--
Test long2ip() function : error conditions
--FILE--
<?php
/* Prototype  : string long2ip(int proper_address)
 * Description: Converts an (IPv4) Internet network address into a string in Internet standard dotted format
 * Source code: ext/standard/basic_functions.c
 * Alias to functions:
 */

echo "*** Testing long2ip() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing long2ip() function with Zero arguments --\n";
var_dump( long2ip() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function long2ip(): 1 required, 0 provided in %s on line %d
 -- compile-error
