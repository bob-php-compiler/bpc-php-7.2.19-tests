--TEST--
Test sprintf() function : error conditions
--FILE--
<?php
/* Prototype  : string sprintf(string $format [, mixed $arg1 [, mixed ...]])
 * Description: Return a formatted string
 * Source code: ext/standard/formatted_print.c
 */

echo "*** Testing sprintf() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing sprintf() function with Zero arguments --\n";
var_dump( sprintf() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sprintf(): 1 required, 0 provided in %s on line %d
 -- compile-error
