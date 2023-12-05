--TEST--
Test DateTime::setTime() function : error conditions
--FILE--
<?php
/* Prototype  : public DateTime DateTime::setTime  ( int $hour  , int $minute  [, int $second  ] )
 * Description: Resets the current time of the DateTime object to a different time.
 * Source code: ext/date/php_date.c
 * Alias to functions: date_time_set
 */

date_default_timezone_set("Europe/London");

echo "*** Testing DateTime::setTime() : error conditions ***\n";

$datetime = date_create("2009-01-31 15:34:10");

$hour = 18;

echo "\n-- Testing DateTime::setTime() function with more than expected no. of arguments --\n";
$min = 15;
$sec = 30;
$extra_arg = 10;
$microseconds = 123123;
var_dump( $datetime->setTime($hour, $min, $sec, $microseconds, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** Testing DateTime::setTime() : error conditions ***

-- Testing DateTime::setTime() function with more than expected no. of arguments --

Warning: Too many arguments to method DateTime::setTime(): 4 at most, 5 provided in %s on line %d
object(DateTime)#1 (3) {
  ["date"]=>
  string(26) "2009-01-31 18:15:30.123123"
  ["timezone_type"]=>
  int(3)
  ["timezone"]=>
  string(13) "Europe/London"
}
===DONE===
