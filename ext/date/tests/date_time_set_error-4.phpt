--TEST--
Test date_time_set() function : error conditions
--FILE--
<?php
/* Prototype  : DateTime date_time_set  ( DateTime $object  , int $hour  , int $minute  [, int $second  ] )
 * Description: Resets the current time of the DateTime object to a different time.
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTime::setTime
 */

date_default_timezone_set("Europe/London");

echo "*** Testing date_time_set() : error conditions ***\n";

$datetime = date_create("2009-01-31 15:34:10");
$hour = 18;

echo "\n-- Testing date_time_set() function with more than expected no. of arguments --\n";
$min = 15;
$sec = 30;
$microseconds = 123123;
$extra_arg = 10;
var_dump( date_time_set($datetime, $hour, $min, $sec, $microseconds, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_time_set(): 5 at most, 6 provided in %s on line %d
 -- compile-error
