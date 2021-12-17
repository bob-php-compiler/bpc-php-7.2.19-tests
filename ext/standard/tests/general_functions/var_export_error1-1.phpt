--TEST--
Test var_export() function : error conditions
--FILE--
<?php
/* Prototype  : mixed var_export(mixed var [, bool return])
 * Description: Outputs or returns a string representation of a variable
 * Source code: ext/standard/var.c
 * Alias to functions:
 */

echo "*** Testing var_export() : error conditions ***\n";

//Test var_export with one more than the expected number of arguments
echo "\n-- Testing var_export() function with more than expected no. of arguments --\n";
$var = 1;
$return = true;
$extra_arg = 10;
var_dump( var_export($var, $return, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function var_export(): 2 at most, 3 provided in %s on line %d
 -- compile-error
