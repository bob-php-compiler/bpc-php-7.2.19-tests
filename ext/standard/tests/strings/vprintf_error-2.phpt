--TEST--
Test vprintf() function : error conditions
--FILE--
<?php
/* Prototype  : int vprintf(string $format , array $args)
 * Description: Output a formatted string
 * Source code: ext/standard/formatted_print.c
 */

echo "*** Testing vprintf() : error conditions ***\n";

// initialising the required variables
$format = "%s";
$args = array("hello");
$extra_arg = "extra arg";

echo "\n-- testing vprintf() function with more than expected no. of arguments --\n";
var_dump( vprintf($format, $args, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function vprintf(): 2 at most, 3 provided in %s on line %d
 -- compile-error
