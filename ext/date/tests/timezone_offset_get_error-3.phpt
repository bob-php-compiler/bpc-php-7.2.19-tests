--TEST--
Test timezone_offset_get() function : error conditions
--FILE--
<?php
/* Prototype  : int timezone_offset_get  ( DateTimeZone $object  , DateTime $datetime  )
 * Description: Returns the timezone offset from GMT
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTimeZone::getOffset
 */

//Set the default time zone
date_default_timezone_set("GMT");
$tz = timezone_open("Europe/London");
$date = date_create("GMT");

set_error_handler('err');

function err($errno, $errstr) {
	if ($errno === E_RECOVERABLE_ERROR) {
		var_dump($errstr);
	}
}

echo "*** Testing timezone_offset_get() : error conditions ***\n";

echo "\n-- Testing timezone_offset_get() function with more than expected no. of arguments --\n";
$extra_arg = 99;
try {
	var_dump( timezone_offset_get($tz, $date, $extra_arg) );
} catch (Error $ex) {
	var_dump($ex->getMessage());
	echo "\n";
}
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function timezone_offset_get(): 2 at most, 3 provided in %s on line %d
 -- compile-error
