--TEST--
Test date_parse() function : error conditions
--FILE--
<?php
/* Prototype  : array date_parse  ( string $date  )
 * Description: Returns associative array with detailed info about given date.
 * Source code: ext/date/php_date.c
 */

//Set the default time zone
date_default_timezone_set("Europe/London");

echo "*** Testing date_parse() : error conditions ***\n";

echo "\n-- Testing date_parse() function with zero arguments --\n";
var_dump( date_parse() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_parse(): 1 required, 0 provided in %s on line %d
 -- compile-error
