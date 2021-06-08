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
echo "\n-- Testing DateTime::setISODate() function with less than expected no. of arguments --\n";
var_dump( $datetime->setISODate($year) );
?>
===DONE===
--EXPECTF--
*** Testing DateTime::setISODate () : error conditions ***

-- Testing DateTime::setISODate() function with less than expected no. of arguments --

Fatal error: Uncaught ArgumentCountError: Too few arguments to method DateTime::setISODate(): 2 required, 1 provided in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
