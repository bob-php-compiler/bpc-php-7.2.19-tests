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

echo "\n-- Testing DateTime::setTimezone () function with more than expected no. of arguments --\n";
$timezone  = new DateTimezone("GMT");
$extra_arg = 99;
var_dump( $datetime->setTimezone($timezone, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** Testing DateTime::setTimezone () : error conditions ***

-- Testing DateTime::setTimezone () function with more than expected no. of arguments --

Warning: Too many arguments to method DateTime::setTimezone(): 1 at most, 2 provided in %s on line %d
object(DateTime)#1 (3) {
  ["date"]=>
  string(26) "2009-01-30 17:57:32.000000"
  ["timezone_type"]=>
  int(2)
  ["timezone"]=>
  string(3) "GMT"
}
===DONE===
