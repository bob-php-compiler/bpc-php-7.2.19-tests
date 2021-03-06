--TEST--
Test closelog() function : error conditions
--FILE--
<?php
/* Prototype  : bool closelog(void)
 * Description: Close connection to system logger
 * Source code: ext/standard/syslog.c
 * Alias to functions:
 */

echo "*** Testing closelog() : error conditions ***\n";

// One argument
echo "\n-- Testing closelog() function with one argument --\n";
$extra_arg = 10;
var_dump( closelog($extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function closelog(): 0 at most, 1 provided in %s on line %d
 -- compile-error
