--TEST--
Test getdate() function : error conditions
--FILE--
<?php
/* Prototype  : array getdate([int timestamp])
 * Description: Get date/time information
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing getdate() : error conditions ***\n";

//Set the default time zone
date_default_timezone_set("America/Chicago");

//Test getdate with one more than the expected number of arguments
echo "\n-- Testing getdate() function with more than expected no. of arguments --\n";
$timestamp = 10;
$extra_arg = 10;
var_dump( getdate($timestamp, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function getdate(): 1 at most, 2 provided in %s on line %d
 -- compile-error
