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

echo "\n-- Testing date_time_set() function with zero arguments --\n";
var_dump( date_time_set() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_time_set(): 3 required, 0 provided in %s on line %d
 -- compile-error
