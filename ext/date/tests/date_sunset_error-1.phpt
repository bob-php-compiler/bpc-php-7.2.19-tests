--TEST--
Test date_sunset() function : error conditions
--FILE--
<?php
/* Prototype  : mixed date_sunset(mixed time [, int format [, float latitude [, float longitude [, float zenith [, float gmt_offset]]]]])
 * Description: Returns time of sunset for a given day and location
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing date_sunset() : error conditions ***\n";

//Initialise the variables
$time = time();
$latitude = 38.4;
$longitude = -9;
$zenith = 90;
$gmt_offset = 1;
$extra_arg = 10;

// Zero arguments
echo "\n-- Testing date_sunset() function with Zero arguments --\n";
var_dump( date_sunset() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_sunset(): 1 required, 0 provided in %s on line %d
 -- compile-error
