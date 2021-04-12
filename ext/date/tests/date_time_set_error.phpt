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

$hour = 18;
$min = 15;
$sec = 30;

echo "\n-- Testing date_time_set() function with an invalid values for \$object argument --\n";
$invalid_obj = new stdClass();
var_dump( date_time_set($invalid_obj, $hour, $min, $sec) );
$invalid_obj = 10;
var_dump( date_time_set($invalid_obj, $hour, $min, $sec) );
$invalid_obj = null;
var_dump( date_time_set($invalid_obj, $hour, $min, $sec) );
?>
===DONE===
--EXPECTF--
*** Testing date_time_set() : error conditions ***

-- Testing date_time_set() function with an invalid values for $object argument --

Warning: date_time_set() expects parameter 1 to be DateTime, object given in %s on line %d
bool(false)

Warning: date_time_set() expects parameter 1 to be DateTime, integer given in %s on line %d
bool(false)

Warning: date_time_set() expects parameter 1 to be DateTime, null given in %s on line %d
bool(false)
===DONE===
