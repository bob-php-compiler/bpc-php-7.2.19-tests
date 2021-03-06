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

// Zero arguments
echo "\n-- Testing file_exists() function with Zero arguments --\n";
var_dump( file_exists() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function file_exists(): 1 required, 0 provided in %s on line %d
 -- compile-error
