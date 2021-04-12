--TEST--
Test date_parse() function : error conditions
--FILE--
<?php
/* Prototype  : array date_parse  ( string $date  )
 * Description: Returns associative array with detailed info about given date.
 * Source code: ext/date/php_date.c
 */

//Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing date_parse() : error conditions ***\n";

echo "\n-- Testing date_parse() function with more than expected no. of arguments --\n";
$date = "2009-02-27 10:00:00.5";
$extra_arg = 10;
var_dump( date_parse($date, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_parse(): 1 at most, 2 provided in %s on line %d
 -- compile-error
