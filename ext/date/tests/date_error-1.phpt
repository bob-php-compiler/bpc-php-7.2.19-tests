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

echo "\n-- Testing date function with no arguments --\n";
var_dump (date());
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date(): 1 required, 0 provided in %s on line %d
 -- compile-error
