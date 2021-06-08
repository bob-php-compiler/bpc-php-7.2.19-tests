--TEST--
Test DateTime::format() function : error conditions
--FILE--
<?php
/* Prototype  : public string DateTime::format  ( string $format  )
 * Description: Returns date formatted according to given format
 * Source code: ext/date/php_date.c
 * Alias to functions: date_format
 */

//Set the default time zone
date_default_timezone_set("Europe/London");

// Craete a date object
$date = new DateTime("2005-07-14 22:30:41");

echo "*** Testing DateTime::format() : error conditions ***\n";

echo "\n-- Testing date_date_formatcreate() function with zero arguments --\n";
var_dump( $date->format() );
?>
===DONE===
--EXPECTF--
*** Testing DateTime::format() : error conditions ***

-- Testing date_date_formatcreate() function with zero arguments --

Fatal error: Uncaught ArgumentCountError: Too few arguments to method DateTime::format(): 1 required, 0 provided in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
