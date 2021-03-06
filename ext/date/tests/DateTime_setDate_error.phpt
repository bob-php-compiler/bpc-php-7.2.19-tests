--TEST--
Test DateTime::setDate() function : error conditions
--FILE--
<?php
/* Prototype  : public DateTime DateTime::setDate  ( int $year  , int $month  , int $day  )
 * Description: Resets the current date of the DateTime object to a different date.
 * Source code: ext/date/php_date.c
 * Alias to functions: date_date_set()
 */

date_default_timezone_set("Europe/London");

echo "*** Testing DateTime::setDate() : error conditions ***\n";

$datetime = new DateTime("2009-01-30 19:34:10");

$year = 2009;
$month = 1;
$day = 30;

echo "\n-- Testing DateTime::setDate() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( $datetime->setDate($year, $month, $day, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** Testing DateTime::setDate() : error conditions ***

-- Testing DateTime::setDate() function with more than expected no. of arguments --

Warning: Too many arguments to method DateTime::setDate(): 3 at most, 4 provided in %s on line %d
object(DateTime)#1 (3) {
  ["date"]=>
  string(26) "2009-01-30 19:34:10.000000"
  ["timezone_type"]=>
  int(3)
  ["timezone"]=>
  string(13) "Europe/London"
}
===DONE===
