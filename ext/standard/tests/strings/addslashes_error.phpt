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

// Zero argument
echo "\n-- Testing addslashes() function with Zero arguments --\n";
var_dump( addslashes() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function addslashes(): 1 required, 0 provided in %s on line %d
 -- compile-error
