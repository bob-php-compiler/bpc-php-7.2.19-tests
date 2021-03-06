--TEST--
Test DateTime::setTimezone () function : error conditions
--FILE--
<?php
/* Prototype  : public DateTime DateTime::setTimezone  ( DateTimeZone $timezone  )
 * Description: Sets the time zone for the DateTime object
 * Source code: ext/date/php_date.c
 * Alias to functions: date_timezone_set
 */

date_default_timezone_set("UTC");

echo "*** Testing DateTime::setTimezone () : error conditions ***\n";

$datetime = new DateTime("2009-01-30 17:57:32");

echo "\n-- Testing DateTime::setTimezone () function with zero arguments --\n";
var_dump( $datetime->setTimezone() );
?>
===DONE===
--EXPECTF--
*** Testing DateTime::setTimezone () : error conditions ***

-- Testing DateTime::setTimezone () function with zero arguments --

Fatal error: Uncaught ArgumentCountError: Too few arguments to method DateTime::setTimezone(): 1 required, 0 provided in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
