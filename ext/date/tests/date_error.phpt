--TEST--
Test date() function : error conditions
--FILE--
<?php
/* Prototype  : string date  ( string $format  [, int $timestamp  ] )
 * Description: Format a local time/date.
 * Source code: ext/date/php_date.c
 */

echo "*** Testing date() : error conditions ***\n";

//Set the default time zone
date_default_timezone_set("America/Chicago");

$format = "m.d.y";
$timestamp = mktime(10, 44, 30, 2, 27, 2009);

echo "\n-- Testing date function with more than expected no. of arguments --\n";
$extra_arg = true;
var_dump (date($format, $timestamp, $extra_arg));

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date(): 2 at most, 3 provided in %s on line %d
 -- compile-error
