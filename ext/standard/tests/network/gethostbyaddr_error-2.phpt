--TEST--
Test gethostbyaddr() function : error conditions
--FILE--
<?php
/* Prototype  : proto string gethostbyaddr(string ip_address)
 * Description: Get the Internet host name corresponding to a given IP address
 * Source code: ext/standard/dns.c
 * Alias to functions:
 */


echo "Testing gethostbyaddr : error conditions\n";

//Test gethostbyaddr with one more than the expected number of arguments
echo "\n-- Testing gethostbyaddr function with more than expected no. of arguments --\n";
$ip_address = 'string_val';
$extra_arg = 10;
var_dump( gethostbyaddr($ip_address, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gethostbyaddr(): 1 at most, 2 provided in %s on line %d
 -- compile-error
