--TEST--
Test idate() function : error conditions
--FILE--
<?php
/* Prototype  : int idate(string format [, int timestamp])
 * Description: Format a local time/date as integer
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing idate() : error conditions ***\n";

echo "\n-- Testing idate() function with Zero arguments --\n";
var_dump( idate() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function idate(): 1 required, 0 provided in %s on line %d
 -- compile-error
