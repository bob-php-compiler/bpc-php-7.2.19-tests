--TEST--
Test syslog() function : error conditions
--FILE--
<?php
/* Prototype  : bool syslog(int priority, string message)
 * Description: Generate a system log message
 * Source code: ext/standard/syslog.c
 * Alias to functions:
 */

echo "*** Testing syslog() : error conditions ***\n";

// Testing syslog with one less than the expected number of arguments
echo "\n-- Testing syslog() function with less than expected no. of arguments --\n";
$priority = 10;
var_dump( syslog($priority) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function syslog(): 2 required, 1 provided in %s on line %d
 -- compile-error
