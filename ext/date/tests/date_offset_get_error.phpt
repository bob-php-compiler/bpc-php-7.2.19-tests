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

echo "\n-- Testing date_offset_get() function with an invalid values for \$object argument --\n";
$invalid_obj = new stdClass();
var_dump( date_offset_get($invalid_obj) );
$invalid_obj = 10;
var_dump( date_offset_get($invalid_obj) );
$invalid_obj = null;
var_dump( date_offset_get($invalid_obj) );
?>
===DONE===
--EXPECTF--
*** Testing date_offset_get() : error conditions ***

-- Testing date_offset_get() function with an invalid values for $object argument --

Warning: date_offset_get() expects parameter 1 to be DateTimeInterface, object given in %s on line %d
bool(false)

Warning: date_offset_get() expects parameter 1 to be DateTimeInterface, integer given in %s on line %d
bool(false)

Warning: date_offset_get() expects parameter 1 to be DateTimeInterface, null given in %s on line %d
bool(false)
===DONE===
