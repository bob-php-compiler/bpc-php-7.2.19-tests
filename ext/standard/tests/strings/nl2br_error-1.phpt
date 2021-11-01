--TEST--
Test nl2br() function : error conditions
--FILE--
<?php
/* Prototype  : string nl2br(string $str)
 * Description: Inserts HTML line breaks before all newlines in a string.
 * Source code: ext/standard/string.c
*/

echo "*** Testing nl2br() : error conditions ***\n";

//Test nl2br with one more than the expected number of arguments
echo "\n-- Testing nl2br() function with more than expected no. of arguments --";
$str = 'string_val';
$extra_arg = 10;
var_dump( nl2br($str, true, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function nl2br(): 2 at most, 3 provided in %s on line %d
 -- compile-error
