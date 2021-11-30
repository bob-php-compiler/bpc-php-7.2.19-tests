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

//Test parse_ini_file with one more than the expected number of arguments
echo "\n-- Testing parse_ini_file() function with more than expected no. of arguments --\n";
$filename = 'string_val';
$process_sections = true;
$scanner_mode = INI_SCANNER_NORMAL;
$extra_arg = 10;
var_dump( parse_ini_file($filename, $process_sections, $scanner_mode, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function parse_ini_file(): 3 at most, 4 provided in %s on line %d
 -- compile-error
