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

echo "\n-- Testing date_timezone_get() function with an invalid values for \$object argument --\n";
$invalid_obj = new stdClass();
var_dump( date_timezone_get($invalid_obj) );
$invalid_obj = 10;
var_dump( date_timezone_get($invalid_obj) );
$invalid_obj = null;
var_dump( date_timezone_get($invalid_obj) );
?>
===DONE===
--EXPECTF--
*** Testing date_timezone_get() : error conditions ***

-- Testing date_timezone_get() function with an invalid values for $object argument --

Warning: date_timezone_get() expects parameter 1 to be DateTimeInterface, object given in %s on line %d
bool(false)

Warning: date_timezone_get() expects parameter 1 to be DateTimeInterface, integer given in %s on line %d
bool(false)

Warning: date_timezone_get() expects parameter 1 to be DateTimeInterface, null given in %s on line %d
bool(false)
===DONE===
