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

echo "\n-- Testing date_create() function with less than expected no. of arguments --\n";
var_dump( date_format($date) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_format(): 2 required, 1 provided in %s on line %d
 -- compile-error
