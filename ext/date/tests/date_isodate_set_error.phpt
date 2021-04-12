--TEST--
Test date_isodate_set() function : error conditions
--FILE--
<?php

/* Prototype  : DateTime date_isodate_set  ( DateTime $object  , int $year  , int $week  [, int $day  ] )
 * Description: Set a date according to the ISO 8601 standard - using weeks and day offsets rather than specific dates.
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTime::setISODate
 */

 //Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing date_isodate_set() : error conditions ***\n";

$year = 2009;
$week = 30;
$day = 7;

echo "\n-- Testing date_isodate_set() function with an invalid values for \$object argument --\n";
$invalid_obj = new stdClass();
var_dump( date_isodate_set($invalid_obj, $year, $week, $day) );
$invalid_obj = 10;
var_dump( date_isodate_set($invalid_obj, $year, $week, $day) );
$invalid_obj = null;
var_dump( date_isodate_set($invalid_obj, $year, $week, $day) );
?>
===DONE===
--EXPECTF--
*** Testing date_isodate_set() : error conditions ***

-- Testing date_isodate_set() function with an invalid values for $object argument --

Warning: date_isodate_set() expects parameter 1 to be DateTime, object given in %s on line %d
bool(false)

Warning: date_isodate_set() expects parameter 1 to be DateTime, integer given in %s on line %d
bool(false)

Warning: date_isodate_set() expects parameter 1 to be DateTime, null given in %s on line %d
bool(false)
===DONE===
