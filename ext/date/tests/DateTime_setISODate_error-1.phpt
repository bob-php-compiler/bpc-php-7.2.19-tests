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

echo "\n-- Testing DateTime::setISODate() function with zero arguments --\n";
var_dump( $datetime->setISODate() );
?>
===DONE===
--EXPECTF--
*** Testing DateTime::setISODate () : error conditions ***

-- Testing DateTime::setISODate() function with zero arguments --

Fatal error: Too few arguments to method DateTime::setISODate(): 2 required, 0 provided in %s on line %d
