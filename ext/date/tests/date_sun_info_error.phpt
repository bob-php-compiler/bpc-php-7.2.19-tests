--TEST--
Test date_sun_info() function : error variations
--FILE--
<?php
/* Prototype  : array date_sun_info ( int $time , float $latitude , float $longitude   )
 * Description:  Returns an array with information about sunset/sunrise and twilight begin/end.
 * Source code: ext/standard/data/php_date.c
 */

echo "*** Testing date_sun_info() : usage variations ***\n";

$time = "2006-12-12";
$latitude=31.7667;
$longitude=35.2333;

echo "\n-- Testing date_sun_info() function with more than expected no. of arguments --\n";
$extra_arg = 99;
var_dump( date_sun_info($time, $latitude, $longitude, $extra_arg) );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_sun_info(): 3 at most, 4 provided in %s on line %d
 -- compile-error
