--TEST--
Test date_offset_get() function : error conditions
--FILE--
<?php

/* Prototype  : int date_offset_get  ( DateTimeInterface $object  )
 * Description: Returns the daylight saving time offset
 * Source code: ext/date/php_date.c
 * Alias to functions:  DateTimeInterface::getOffset
 */

 //Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing date_offset_get() : error conditions ***\n";

echo "\n-- Testing date_offset_get() function with zero arguments --\n";
var_dump( date_offset_get() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_offset_get(): 1 required, 0 provided in %s on line %d
 -- compile-error
