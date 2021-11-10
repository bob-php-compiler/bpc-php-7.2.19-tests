--TEST--
Test chmod() function : error conditions
--FILE--
<?php
/* Prototype  : bool chmod(string filename, int mode)
 * Description: Change file mode
 * Source code: ext/standard/filestat.c
 * Alias to functions:
 */

echo "*** Testing chmod() : error conditions ***\n";


// Testing chmod with one less than the expected number of arguments
echo "\n-- Testing chmod() function with less than expected no. of arguments --\n";
$filename = 'string_val';
var_dump( chmod($filename) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function chmod(): 2 required, 1 provided in %s on line %d
 -- compile-error
