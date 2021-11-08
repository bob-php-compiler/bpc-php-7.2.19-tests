--TEST--
Test dirname() function : error conditions
--CREDITS--
Dave Kelsey <d_kelsey@uk.ibm.com>
--FILE--
<?php
/* Prototype  : string dirname(string path)
 * Description: Returns the directory name component of the path
 * Source code: ext/standard/string.c
 * Alias to functions:
 */

echo "*** Testing dirname() : error conditions ***\n";

//Test dirname with one more than the expected number of arguments
echo "\n-- Testing dirname() function with more than expected no. of arguments --\n";
$path = 'string_val';
$extra_arg = 10;
var_dump( dirname($path, 1, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function dirname(): 2 at most, 3 provided in %s on line %d
 -- compile-error
