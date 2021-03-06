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

//Test ip2long with one more than the expected number of arguments
echo "\n-- Testing ip2long() function with more than expected no. of arguments --\n";
$ip_address = '127.0.0.1';
$extra_arg = 10;
var_dump( ip2long($ip_address, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ip2long(): 1 at most, 2 provided in %s on line %d
 -- compile-error
