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

echo "\n-- Testing date_date_set() function with zero arguments --\n";
var_dump( date_date_set() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_date_set(): 4 required, 0 provided in %s on line %d
 -- compile-error
