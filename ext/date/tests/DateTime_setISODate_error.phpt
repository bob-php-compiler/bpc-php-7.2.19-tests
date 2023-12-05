--TEST--
Test DateTime::setISODate () function : error conditions
--FILE--
<?php

/* Prototype  : public DateTime DateTime::setISODate  ( int $year  , int $week  [, int $day  ] )
 * Description: Set a date according to the ISO 8601 standard - using weeks and day offsets rather than specific dates.
 * Source code: ext/date/php_date.c
 * Alias to functions: date_isodate_set
 */

 //Set the default time zone
date_default_timezone_set("Europe/London");

$datetime = new DateTime("2009-01-30 19:34:10");

echo "*** Testing DateTime::setISODate () : error conditions ***\n";

$year = 2009;

echo "\n-- Testing date_isodate_set() function with more than expected no. of arguments --\n";
$week = 30;
$day = 7;
$extra_arg = 30;
var_dump(  $datetime->setISODate($year, $week, $day, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** Testing DateTime::setISODate () : error conditions ***

-- Testing date_isodate_set() function with more than expected no. of arguments --

Warning: Too many arguments to method DateTime::setISODate(): 3 at most, 4 provided in %s on line %d
object(DateTime)#1 (3) {
  ["date"]=>
  string(26) "2009-07-26 19:34:10.000000"
  ["timezone_type"]=>
  int(3)
  ["timezone"]=>
  string(13) "Europe/London"
}
===DONE===
