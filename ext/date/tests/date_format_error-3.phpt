--TEST--
Test date_format() function : error conditions
--FILE--
<?php
/* Prototype  : string date_format  ( DateTime $object  , string $format  )
 * Description: Returns date formatted according to given format
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTime::format
 */

//Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing date_format() : error conditions ***\n";

$date = date_create("2005-07-14 22:30:41");

echo "\n-- Testing date_create() function with more than expected no. of arguments --\n";
$format = "F j, Y, g:i a";
$extra_arg = 10;
var_dump( date_format($date, $format, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_format(): 2 at most, 3 provided in %s on line %d
 -- compile-error
