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


//Test chmod with one more than the expected number of arguments
echo "\n-- Testing chmod() function with more than expected no. of arguments --\n";
$filename = 'string_val';
$mode = 10;
$extra_arg = 10;
var_dump( chmod($filename, $mode, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function chmod(): 2 at most, 3 provided in %s on line %d
 -- compile-error
