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

echo "\n-- Testing vsprintf() function with less than expected no. of arguments --\n";
var_dump( vsprintf($format) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function vsprintf(): 2 required, 1 provided in %s on line %d
 -- compile-error
