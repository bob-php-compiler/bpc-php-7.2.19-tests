--TEST--
Test new DateTimeZone() : error conditions
--FILE--
<?php
/* Prototype  : DateTimeZone::__construct  ( string $timezone  )
 * Description: Returns new DateTimeZone object
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */
//Set the default time zone
date_default_timezone_set("GMT");

echo "*** Testing DateTimeZone() : error conditions ***\n";

echo "\n-- Testing new DateTimeZone() with more than expected no. of arguments --\n";
$timezone = "GMT";
$extra_arg = 99;
try {
    new DateTimeZone($timezone, $extra_arg);
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

?>
===DONE===
--EXPECTF--
*** Testing DateTimeZone() : error conditions ***

-- Testing new DateTimeZone() with more than expected no. of arguments --

Warning: Too many arguments to method DateTimeZone::__construct(): 1 at most, 2 provided in %s on line %d
===DONE===
