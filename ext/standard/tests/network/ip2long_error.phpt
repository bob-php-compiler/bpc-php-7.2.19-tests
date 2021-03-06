--TEST--
Test ip2long() function : error conditions
--FILE--
<?php
/* Prototype  : int ip2long(string ip_address)
 * Description: Converts a string containing an (IPv4) Internet Protocol dotted address into a proper address
 * Source code: ext/standard/basic_functions.c
 * Alias to functions:
 */

echo "*** Testing ip2long() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing ip2long() function with Zero arguments --\n";
var_dump( ip2long() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ip2long(): 1 required, 0 provided in %s on line %d
 -- compile-error
