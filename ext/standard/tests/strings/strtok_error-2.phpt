--TEST--
Test strtok() function : error conditions
--FILE--
<?php
/* Prototype  : string strtok ( string $str, string $token )
 * Description: splits a string (str) into smaller strings (tokens), with each token being delimited by any character from token
 * Source code: ext/standard/string.c
*/

/*
 * Testing strtok() for error conditions
*/

echo "*** Testing strtok() : error conditions ***\n";

// More than expected number of arguments
echo "\n-- Testing strtok() function with more than expected no. of arguments --\n";
$str = 'sample string';
$token = ' ';
$extra_arg = 10;

var_dump( strtok($str, $token, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strtok(): 2 at most, 3 provided in %s on line %d
 -- compile-error
