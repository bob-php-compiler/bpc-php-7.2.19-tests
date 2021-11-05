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

// Zero argument
echo "\n-- Testing strtok() function with Zero arguments --\n";
var_dump( strtok() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strtok(): 1 required, 0 provided in %s on line %d
 -- compile-error
