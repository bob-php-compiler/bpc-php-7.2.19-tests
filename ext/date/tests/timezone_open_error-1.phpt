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

echo "\n-- Testing timezone_open() function with zero arguments --\n";
var_dump( timezone_open() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function timezone_open(): 1 required, 0 provided in %s on line %d
 -- compile-error
