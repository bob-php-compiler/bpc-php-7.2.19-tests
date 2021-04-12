--TEST--
Test checkdate() function : error conditions
--FILE--
<?php
/* Prototype  : bool checkdate  ( int $month  , int $day  , int $year  )
 * Description: Validate a Gregorian date
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing checkdate() : error conditions ***\n";

//Set the default time zone
date_default_timezone_set("America/Chicago");

$arg_0 = 1;

echo "\n-- Testing checkdate() function with less than expected no. of arguments --\n";
var_dump (checkdate($arg_0));

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function checkdate(): 3 required, 1 provided in %s on line %d
 -- compile-error
