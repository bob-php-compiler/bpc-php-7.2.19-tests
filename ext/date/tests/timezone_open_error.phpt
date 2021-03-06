--TEST--
Test timezone_open() function : error conditions
--FILE--
<?php
/* Prototype  : DateTimeZone timezone_open  ( string $timezone  )
 * Description: Returns new DateTimeZone object
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTime::__construct()
 */

echo "*** Testing timezone_open() : error conditions ***\n";

echo "\n-- Testing timezone_open() function with more than expected no. of arguments --\n";
$time = "GMT";
$extra_arg = 99;
var_dump( timezone_open($time, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function timezone_open(): 1 at most, 2 provided in %s on line %d
 -- compile-error
