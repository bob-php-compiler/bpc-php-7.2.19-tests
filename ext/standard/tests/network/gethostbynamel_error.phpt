--TEST--
Test gethostbynamel() function : error conditions
--FILE--
<?php
/* Prototype  : proto array gethostbynamel(string hostname)
 * Description: Return a list of IP addresses that a given hostname resolves to.
 * Source code: ext/standard/dns.c
 * Alias to functions:
 */

echo "*** Testing gethostbynamel() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing gethostbynamel() function with Zero arguments --\n";
var_dump( gethostbynamel() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gethostbynamel(): 1 required, 0 provided in %s on line %d
 -- compile-error
