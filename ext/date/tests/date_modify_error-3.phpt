--TEST--
Test date_modify() function : error conditions
--FILE--
<?php
/* Prototype  : DateTime date_modify  ( DateTime $object  , string $modify  )
 * Description: Alter the timestamp of a DateTime object by incrementing or decrementing in a format accepted by strtotime().
 * Source code: ext/date/php_date.c
 * Alias to functions: public DateTime DateTime::modify()
 */

//Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing date_modify() : error conditions ***\n";

// Create a date object
$datetime = date_create("2009-01-30 19:34:10");

echo "\n-- Testing date_modify() function with more than expected no. of arguments --\n";
$modify = "+1 day";
$extra_arg = 99;
var_dump( date_modify($datetime, $modify, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_modify(): 2 at most, 3 provided in %s on line %d
 -- compile-error
