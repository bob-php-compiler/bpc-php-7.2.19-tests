--TEST--
Test gmdate() function : error conditions
--FILE--
<?php
/* Prototype  : string gmdate(string format [, long timestamp])
 * Description: Format a GMT date/time
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing gmdate() : error conditions ***\n";

// Initialise all required variables
date_default_timezone_set('UTC');
$format = DATE_ISO8601;
$timestamp = mktime(8, 8, 8, 8, 8, 2008);

// Zero arguments
echo "\n-- Testing gmdate() function with Zero arguments --\n";
var_dump( gmdate() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmdate(): 1 required, 0 provided in %s on line %d
 -- compile-error
