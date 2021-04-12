--TEST--
Test date_default_timezone_set() function : error variations
--FILE--
<?php
/* Prototype  : bool date_default_timezone_set ( string $timezone_identifier )
 * Description:  Sets the default timezone used by all date/time functions in a script.
 * Source code: ext/standard/data/php_date.c
 */

echo "*** Testing date_default_timezone_set() : error variations ***\n";

echo "\n-- Testing date_default_timezone_set() function with less than expected no. of arguments --\n";
var_dump( date_default_timezone_set() );
?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_default_timezone_set(): 1 required, 0 provided in %s on line %d
 -- compile-error
