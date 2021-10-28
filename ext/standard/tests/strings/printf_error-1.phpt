--TEST--
Test printf() function : error conditions
--FILE--
<?php
/* Prototype  : int printf  ( string $format  [, mixed $args  [, mixed $...  ]] )
 * Description: Produces output according to format .
 * Source code: ext/standard/formatted_print.c
 */

echo "*** Testing printf() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing printf() function with Zero arguments --\n";
var_dump( printf() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function printf(): 1 required, 0 provided in %s on line %d
 -- compile-error
