--TEST--
Test basename() function : error conditions
--FILE--
<?php
/* Prototype  : string basename(string path [, string suffix])
 * Description: Returns the filename component of the path
 * Source code: ext/standard/string.c
 * Alias to functions:
 */

echo "*** Testing basename() : error conditions ***\n";

//Test basename with one more than the expected number of arguments
echo "\n-- Testing basename() function with more than expected no. of arguments --\n";
$path = 'string_val';
$suffix = 'string_val';
$extra_arg = 10;
var_dump( basename($path, $suffix, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function basename(): 2 at most, 3 provided in %s on line %d
 -- compile-error
