--TEST--
Test date_offset_get() function : error conditions
--FILE--
<?php

/* Prototype  : int date_offset_get  ( DateTimeInterface $object  )
 * Description: Returns the daylight saving time offset
 * Source code: ext/date/php_date.c
 * Alias to functions:  DateTimeInterface::getOffset
 */

 //Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing date_offset_get() : error conditions ***\n";

echo "\n-- Testing date_offset_get() function with more than expected no. of arguments --\n";
$datetime = date_create("2009-01-30 19:34:10");
$extra_arg = 30;
var_dump( date_offset_get($datetime, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_offset_get(): 1 at most, 2 provided in %s on line %d
 -- compile-error
