--TEST--
Test date_timezone_get() function : error conditions
--FILE--
<?php
/* Prototype  : DateTimeZone date_timezone_get  ( DateTimeInterface $object  )
 * Description: Return time zone relative to given DateTimeInterface
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTimeInterface::getTimezone
 */

// Set timezone
date_default_timezone_set("Europe/London");

echo "*** Testing date_timezone_get() : error conditions ***\n";

echo "\n-- Testing date_timezone_get() function with more than expected no. of arguments --\n";
$datetime = date_create("2009-01-30 17:57:32");
$extra_arg = 99;
var_dump( date_timezone_get($datetime, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_timezone_get(): 1 at most, 2 provided in %s on line %d
 -- compile-error
