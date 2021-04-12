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

echo "\n-- Testing date_timezone_set() function with more than expected no. of arguments --\n";
$timezone  = timezone_open("GMT");
$extra_arg = 99;
var_dump( date_timezone_set($datetime, $timezone, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_timezone_set(): 2 at most, 3 provided in %s on line %d
 -- compile-error
