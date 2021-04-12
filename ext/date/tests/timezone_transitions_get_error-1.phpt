--TEST--
Test timezone_transitions_get() function : error conditions
--FILE--
<?php
/* Prototype  : array timezone_transitions_get  ( DateTimeZone $object, [ int $timestamp_begin  [, int $timestamp_end  ]]  )
 * Description: Returns all transitions for the timezone
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTimeZone::getTransitions()
 */

//Set the default time zone
date_default_timezone_set("GMT");
$tz = timezone_open("Europe/London");

echo "*** Testing timezone_transitions_get() : error conditions ***\n";

echo "\n-- Testing timezone_transitions_get() function with zero arguments --\n";
var_dump( timezone_transitions_get() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function timezone_transitions_get(): 1 required, 0 provided in %s on line %d
 -- compile-error
