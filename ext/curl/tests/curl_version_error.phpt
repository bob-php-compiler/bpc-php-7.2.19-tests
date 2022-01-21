--TEST--
Test curl_version() function : error conditions
--SKIPIF--
<?php if (!extension_loaded("curl")) exit("skip curl extension not loaded"); ?>
--FILE--
<?php

/* Prototype  : array curl_version  ([ int $age  ] )
 * Description: Returns information about the cURL version.
 * Source code: ext/curl/interface.c
*/

echo "*** Testing curl_version() : error conditions ***\n";

echo "\n-- Testing curl_version() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( curl_version(1, $extra_arg) );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function curl_version(): 1 at most, 2 provided in %s on line %d
 -- compile-error
