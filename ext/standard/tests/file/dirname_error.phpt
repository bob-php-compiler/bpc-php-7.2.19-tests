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

// Zero arguments
echo "\n-- Testing dirname() function with Zero arguments --\n";
var_dump( dirname() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function dirname(): 1 required, 0 provided in %s on line %d
 -- compile-error
