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

$process_sections = true;

echo "\n-- Testing parse_ini_file() function with a non-existent file --\n";
$filename = __FILE__ . 'invalidfilename';
var_dump( parse_ini_file($filename, $process_sections) );

echo "Done";
?>
--EXPECTF--
*** Testing parse_ini_file() : error conditions ***

-- Testing parse_ini_file() function with a non-existent file --

Warning: parse_ini_file(%s): failed to open stream: No such file or directory in %s on line %d
bool(false)
Done
