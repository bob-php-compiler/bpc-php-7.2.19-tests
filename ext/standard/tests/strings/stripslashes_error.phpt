--TEST--
Test stripslashes() function : error conditions
--FILE--
<?php
/* Prototype  : string stripslashes ( string $str )
 * Description: Returns an un-quoted string
 * Source code: ext/standard/string.c
*/

/*
 * Testing stripslashes() for error conditions
*/

echo "*** Testing stripslashes() : error conditions ***\n";

// Zero argument
echo "\n-- Testing stripslashes() function with Zero arguments --\n";
var_dump( stripslashes() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function stripslashes(): 1 required, 0 provided in %s on line %d
 -- compile-error
