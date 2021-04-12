--TEST--
Test date_date_set() function : error conditions
--FILE--
<?php
/* Prototype  : DateTime date_date_set  ( DateTime $object  , int $year  , int $month  , int $day  )
 * Description: Resets the current date of the DateTime object to a different date.
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTime::setDate
 */

date_default_timezone_set("Europe/London");

echo "*** Testing date_date_set() : error conditions ***\n";

echo "\n-- Testing date_date_set() function with less than expected no. of arguments --\n";
$datetime = date_create("2009-01-30 19:34:10");
$year = 2009;
var_dump( date_date_set($datetime, $year) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_date_set(): 4 required, 2 provided in %s on line %d
 -- compile-error
