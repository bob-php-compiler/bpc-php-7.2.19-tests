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

// Zero arguments
echo "\n-- Testing gethostbyaddr function with Zero arguments --\n";
var_dump( gethostbyaddr() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gethostbyaddr(): 1 required, 0 provided in %s on line %d
 -- compile-error
