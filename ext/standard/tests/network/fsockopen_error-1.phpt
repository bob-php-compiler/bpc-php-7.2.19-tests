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


echo "\n-- Testing fsockopen() function with more than expected no. of arguments --\n";
$hostname = 'string_val';
$port = 10;
$errno = 10;
$errstr = 'string_val';
$timeout = 10.5;
$extra_arg = 10;
var_dump( fsockopen($hostname, $port, $errno, $errstr, $timeout, $extra_arg) );
var_dump($errstr);
var_dump($errno);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fsockopen(): 5 at most, 6 provided in %s on line %d
 -- compile-error
