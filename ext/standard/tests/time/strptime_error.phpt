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

$format = '%b %d %Y %H:%M:%S';

echo "\n-- Testing strptime() function on failure --\n";
var_dump( strptime('foo', $format) );

?>
===DONE===
--EXPECTF--
*** Testing strptime() : error conditions ***

-- Testing strptime() function on failure --
bool(false)
===DONE===
