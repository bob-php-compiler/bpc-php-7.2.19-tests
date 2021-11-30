--TEST--
Test parse_ini_file() function : error conditions
--FILE--
<?php
/* Prototype  : proto array parse_ini_file(string filename [, bool process_sections])
 * Description: Parse configuration file
 * Source code: ext/standard/basic_functions.c
 * Alias to functions:
 */

echo "*** Testing parse_ini_file() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing parse_ini_file() function with Zero arguments --\n";
var_dump( parse_ini_file() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function parse_ini_file(): 1 required, 0 provided in %s on line %d
 -- compile-error
