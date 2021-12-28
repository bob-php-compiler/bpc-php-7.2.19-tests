--TEST--
Test localtime() function : error conditions
--SKIPIF--
<?php
if (!function_exists('strptime')) {
	echo "SKIP strptime function not available in build";
}
?>
--FILE--
<?php
/* Prototype  : array strptime  ( string $date  , string $format  )
 * Description: Parse a time/date generated with strftime()
 * Source code: ext/standard/datetime.c
 * Alias to functions:
 */

//Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing strptime() : error conditions ***\n";

echo "\n-- Testing strptime() function with less than expected no. of arguments --\n";
$format = '%b %d %Y %H:%M:%S';
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
$date = strftime($format, $timestamp);
var_dump( strptime($date) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strptime(): 2 required, 1 provided in %s on line %d
 -- compile-error
