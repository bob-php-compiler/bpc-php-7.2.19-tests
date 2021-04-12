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

echo "\n-- Testing date_isodate_set() function with zero arguments --\n";
var_dump( date_isodate_set() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_isodate_set(): 3 required, 0 provided in %s on line %d
 -- compile-error
