--TEST--
Test timezone_name_get() function : error conditions
--FILE--
<?php
/* Prototype  : string timezone_name_get ( DateTime $object  )
 * Description: Returns the name of the timezone
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTimeZone::getName()
 */

// Set timezone
date_default_timezone_set("Europe/London");

echo "*** Testing timezone_name_get() : error conditions ***\n";

echo "\n-- Testing timezone_name_get() function with an invalid values for \$object argument --\n";
$invalid_obj = new stdClass();
var_dump( timezone_name_get($invalid_obj) );
$invalid_obj = 10;
var_dump( timezone_name_get($invalid_obj) );
$invalid_obj = null;
var_dump( timezone_name_get($invalid_obj) );
?>
===DONE===
--EXPECTF--
*** Testing timezone_name_get() : error conditions ***

-- Testing timezone_name_get() function with an invalid values for $object argument --

Warning: timezone_name_get() expects parameter 1 to be DateTimeZone, object given in %s on line %d
bool(false)

Warning: timezone_name_get() expects parameter 1 to be DateTimeZone, integer given in %s on line %d
bool(false)

Warning: timezone_name_get() expects parameter 1 to be DateTimeZone, null given in %s on line %d
bool(false)
===DONE===
