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

echo "\n-- Testing date_timezone_set() function with zero arguments --\n";
var_dump( date_timezone_set() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_timezone_set(): 2 required, 0 provided in %s on line %d
 -- compile-error
