--TEST--
Test strcspn() function : error conditions
--FILE--
<?php
/* Prototype  : proto int strcspn(string str, string mask [, int start [, int len]])
 * Description: Finds length of initial segment consisting entirely of characters not found in mask.
                If start or/and length is provided works like strcspn(substr($s,$start,$len),$bad_chars)
 * Source code: ext/standard/string.c
 * Alias to functions: none
*/

/*
* Test strcspn() : for error conditons
*/

echo "*** Testing strcspn() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing strcspn() function with Zero arguments --\n";
var_dump( strcspn() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strcspn(): 2 required, 0 provided in %s on line %d
 -- compile-error
