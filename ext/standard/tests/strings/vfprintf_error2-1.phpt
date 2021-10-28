--TEST--
Test vfprintf() function : error conditions (less than expected arguments)
--CREDITS--
Felix De Vliegher <felix.devliegher@gmail.com>
--INI--
precision=14
--FILE--
<?php
/* Prototype  : int vfprintf(resource stream, string format, array args)
 * Description: Output a formatted string into a stream
 * Source code: ext/standard/formatted_print.c
 * Alias to functions:
 */

// Open handle
$file = 'vfprintf_test.txt';
$fp = fopen( $file, "a+" );

echo "\n-- Testing vfprintf() function with less than expected no. of arguments --\n";
var_dump( vfprintf( $fp ) );

// Close handle
fclose($fp);

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function vfprintf(): 3 required, 1 provided in %s on line %d
 -- compile-error
