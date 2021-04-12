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

echo "\n-- Testing timezone_transitions_get() function with more than expected no. of arguments --\n";
$timestamp_begin = mktime(0, 0, 0, 1, 1, 1972);
$timestamp_end = mktime(0, 0, 0, 1, 1, 1975);
$extra_arg = 99;
var_dump( timezone_transitions_get($tz, $timestamp_begin, $timestamp_end, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function timezone_transitions_get(): 3 at most, 4 provided in %s on line %d
 -- compile-error
