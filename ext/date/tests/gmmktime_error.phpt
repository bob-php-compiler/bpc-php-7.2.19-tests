--TEST--
Test gmmktime() function : error conditions
--FILE--
<?php
/* Prototype  : int gmmktime([int hour [, int min [, int sec [, int mon [, int day [, int year]]]]]])
 * Description: Get UNIX timestamp for a GMT date
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing gmmktime() : error conditions ***\n";

//Test gmmktime with one more than the expected number of arguments
echo "\n-- Testing gmmktime() function with more than expected no. of arguments --\n";
$hour = 8;
$min = 8;
$sec = 8;
$mon = 8;
$day = 8;
$year = 2008;
$extra_arg = 10;

var_dump( gmmktime($hour, $min, $sec, $mon, $day, $year, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmmktime(): 6 at most, 7 provided in %s on line %d
 -- compile-error
