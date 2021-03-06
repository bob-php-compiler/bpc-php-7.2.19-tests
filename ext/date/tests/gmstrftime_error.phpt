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

//Test gmstrftime with one more than the expected number of arguments
echo "\n-- Testing gmstrftime() function with more than expected no. of arguments --\n";
$format = '%b %d %Y %H:%M:%S';
$timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
$extra_arg = 10;
var_dump( gmstrftime($format, $timestamp, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmstrftime(): 2 at most, 3 provided in %s on line %d
 -- compile-error
