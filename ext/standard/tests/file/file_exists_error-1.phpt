--TEST--
Test file_exists() function : error conditions
--CREDITS--
Dave Kelsey <d_kelsey@uk.ibm.com>
--FILE--
<?php
/* Prototype  : proto bool file_exists(string filename)
 * Description: Returns true if filename exists
 * Source code: ext/standard/filestat.c
 * Alias to functions:
 */

echo "*** Testing file_exists() : error conditions ***\n";

//Test file_exists with one more than the expected number of arguments
echo "\n-- Testing file_exists() function with more than expected no. of arguments --\n";
$filename = 'string_val';
$extra_arg = 10;
var_dump( file_exists($filename, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function file_exists(): 1 at most, 2 provided in %s on line %d
 -- compile-error
