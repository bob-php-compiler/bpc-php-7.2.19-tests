--TEST--
Test vprintf() function : error conditions
--FILE--
<?php
/* Prototype  : int vprintf(string $format , array $args)
 * Description: Output a formatted string
 * Source code: ext/standard/formatted_print.c
 */

echo "*** Testing vprintf() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing vprintf() function with Zero arguments --\n";
var_dump( vprintf() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function vprintf(): 2 required, 0 provided in %s on line %d
 -- compile-error
