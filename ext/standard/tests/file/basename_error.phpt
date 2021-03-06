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

// Zero arguments
echo "\n-- Testing basename() function with Zero arguments --\n";
var_dump( basename() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function basename(): 1 required, 0 provided in %s on line %d
 -- compile-error
