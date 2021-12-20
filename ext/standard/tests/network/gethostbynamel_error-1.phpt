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

//Test gethostbynamel with one more than the expected number of arguments
echo "\n-- Testing gethostbynamel() function with more than expected no. of arguments --\n";
$hostname = 'string_val';
$extra_arg = 10;
var_dump( gethostbynamel($hostname, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gethostbynamel(): 1 at most, 2 provided in %s on line %d
 -- compile-error
