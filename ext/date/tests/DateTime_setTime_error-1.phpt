--TEST--
Test DateTime::setTime() function : error conditions
--FILE--
<?php
/* Prototype  : public DateTime DateTime::setTime  ( int $hour  , int $minute  [, int $second  ] )
 * Description: Resets the current time of the DateTime object to a different time.
 * Source code: ext/date/php_date.c
 * Alias to functions: date_time_set
 */

date_default_timezone_set("Europe/London");

echo "*** Testing DateTime::setTime() : error conditions ***\n";

$datetime = date_create("2009-01-31 15:34:10");

echo "\n-- Testing DateTime::setTime() function with zero arguments --\n";
var_dump( $datetime->setTime() );
?>
===DONE===
--EXPECTF--
*** Testing DateTime::setTime() : error conditions ***

-- Testing DateTime::setTime() function with zero arguments --

Fatal error: Uncaught ArgumentCountError: Too few arguments to method DateTime::setTime(): 2 required, 0 provided in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
