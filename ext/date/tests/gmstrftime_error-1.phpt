--TEST--
Test gmstrftime() function : error conditions
--FILE--
<?php
/* Prototype  : string gmstrftime(string format [, int timestamp])
 * Description: Format a GMT/UCT time/date according to locale settings
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing gmstrftime() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing gmstrftime() function with Zero arguments --\n";
var_dump( gmstrftime() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmstrftime(): 1 required, 0 provided in %s on line %d
 -- compile-error
