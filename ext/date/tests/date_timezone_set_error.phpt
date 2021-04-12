--TEST--
Test date_timezone_set() function : error conditions
--FILE--
<?php
/* Prototype  : DateTime date_timezone_set  ( DateTime $object  , DateTimeZone $timezone  )
 * Description: Sets the time zone for the DateTime object
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTime::setTimezone
 */

date_default_timezone_set("UTC");

echo "*** Testing date_timezone_set() : error conditions ***\n";


$datetime = date_create("2009-01-30 17:57:32");

$timezone  = timezone_open("GMT");

echo "\n-- Testing date_timezone_set() function with an invalid values for \$object argument --\n";
$invalid_obj = new stdClass();
var_dump( date_timezone_set($invalid_obj, $timezone) );
$invalid_obj = 10;
var_dump( date_timezone_set($invalid_obj, $timezone) );
$invalid_obj = null;
var_dump( date_timezone_set($invalid_obj, $timezone) );
?>
===DONE===
--EXPECTF--
*** Testing date_timezone_set() : error conditions ***

-- Testing date_timezone_set() function with an invalid values for $object argument --

Warning: date_timezone_set() expects parameter 1 to be DateTime, object given in %s on line %d
bool(false)

Warning: date_timezone_set() expects parameter 1 to be DateTime, integer given in %s on line %d
bool(false)

Warning: date_timezone_set() expects parameter 1 to be DateTime, null given in %s on line %d
bool(false)
===DONE===
