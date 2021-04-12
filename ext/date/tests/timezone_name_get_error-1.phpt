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

echo "\n-- Testing timezone_name_get() function with zero arguments --\n";
var_dump( timezone_name_get() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function timezone_name_get(): 1 required, 0 provided in %s on line %d
 -- compile-error
