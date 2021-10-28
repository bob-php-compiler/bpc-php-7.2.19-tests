--TEST--
Test vsprintf() function : error conditions
--FILE--
<?php
/* Prototype  : string vsprintf(string $format , array $args)
 * Description: Return a formatted string
 * Source code: ext/standard/formatted_print.c
 */

echo "*** Testing vsprintf() : error conditions ***\n";

// initialising the required variables
$format = "%s";
$args = array("hello");
$extra_arg = "extra arg";

echo "\n-- testing vsprintf() function with more than expected no. of arguments --\n";
var_dump( vsprintf($format, $args, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function vsprintf(): 2 at most, 3 provided in %s on line %d
 -- compile-error
