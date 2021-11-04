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

//Test strcspn with one more than the expected number of arguments
echo "\n-- Testing strcspn() function with more than expected no. of arguments --\n";
$str = 'string_val';
$mask = 'string_val';
$start = 2;
$len = 20;


$extra_arg = 10;
var_dump( strcspn($str,$mask,$start,$len, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strcspn(): 4 at most, 5 provided in %s on line %d
 -- compile-error
