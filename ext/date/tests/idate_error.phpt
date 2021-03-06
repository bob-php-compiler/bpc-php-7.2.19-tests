--TEST--
Test idate() function : error conditions
--FILE--
<?php
/* Prototype  : int idate(string format [, int timestamp])
 * Description: Format a local time/date as integer
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing idate() : error conditions ***\n";

echo "\n-- Testing idate() function with more than expected no. of arguments --\n";
$format = '%b %d %Y %H:%M:%S';
$timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
$extra_arg = 10;
var_dump( idate($format, $timestamp, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function idate(): 2 at most, 3 provided in %s on line %d
 -- compile-error
