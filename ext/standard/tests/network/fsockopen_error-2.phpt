--TEST--
Test fsockopen() function : error conditions
--FILE--
<?php
/* Prototype  : proto resource fsockopen(string hostname, int port [, int errno [, string errstr [, float timeout]]])
 * Description: Open Internet or Unix domain socket connection
 * Source code: ext/standard/fsock.c
 * Alias to functions:
 */


echo "*** Testing fsockopen() : basic error conditions ***\n";

echo "\n-- Testing fsockopen() function with less than expected no. of arguments --\n";
var_dump( fsockopen() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fsockopen(): 1 required, 0 provided in %s on line %d
 -- compile-error
