--TEST--
Test vsprintf() function : error conditions
--FILE--
<?php
/* Prototype  : string vsprintf(string $format , array $args)
 * Description: Return a formatted string
 * Source code: ext/standard/formatted_print.c
 */

echo "*** Testing vsprintf() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing vsprintf() function with Zero arguments --\n";
var_dump( vsprintf() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function vsprintf(): 2 required, 0 provided in %s on line %d
 -- compile-error
