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

// More than expected number of arguments
echo "\n-- Testing stripslashes() function with more than expected no. of arguments --\n";
$str = '\"hello\"\"world\"';
$extra_arg = 10;

var_dump( stripslashes($str, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function stripslashes(): 1 at most, 2 provided in %s on line %d
 -- compile-error
