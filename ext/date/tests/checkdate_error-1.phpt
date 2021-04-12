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
$arg_1 = 1;
$arg_2 = 1;
$extra_arg = 1;

echo "\n-- Testing checkdate() function with more than expected no. of arguments --\n";
var_dump (checkdate($arg_0, $arg_1, $arg_2, $extra_arg));

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function checkdate(): 3 at most, 4 provided in %s on line %d
 -- compile-error
