--TEST--
Test addslashes() function : error conditions
--FILE--
<?php
/* Prototype  : string addslashes ( string $str )
 * Description: Returns a string with backslashes before characters that need to be quoted in database queries etc.
 * Source code: ext/standard/string.c
*/

/*
 * Testing addslashes() for error conditions
*/

echo "*** Testing addslashes() : error conditions ***\n";

// More than expected number of arguments
echo "\n-- Testing addslashes() function with more than expected no. of arguments --\n";
$str = '"hello"\"world"';
$extra_arg = 10;

var_dump( addslashes($str, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function addslashes(): 1 at most, 2 provided in %s on line %d
 -- compile-error
