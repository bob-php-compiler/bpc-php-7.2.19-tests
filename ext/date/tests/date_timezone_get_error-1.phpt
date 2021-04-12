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

echo "\n-- Testing date_timezone_get() function with zero arguments --\n";
var_dump( date_timezone_get() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_timezone_get(): 1 required, 0 provided in %s on line %d
 -- compile-error
