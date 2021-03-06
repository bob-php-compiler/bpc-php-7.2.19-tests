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

// Less than expected number of arguments
echo "\n-- Testing strtok() with less than expected no. of arguments --\n";
$str = 'string val';

var_dump( strtok($str));
var_dump( $str );

echo "Done\n";
?>
--EXPECTF--
*** Testing strtok() : error conditions ***

-- Testing strtok() with less than expected no. of arguments --
bool(false)
string(10) "string val"
Done
