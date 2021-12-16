--TEST--
Testing floatval() and its alias doubleval() : error conditions -  wrong numbers of parametersns
--FILE--
<?php
/* Prototype: float floatval( mixed $var );
 * Description: Returns the float value of var.
 */

echo "*** Testing floatval() and doubleval() : error conditions ***\n";


echo "\n-- Testing floatval() and doubleval() function with no arguments --\n";
var_dump( doubleval() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function doubleval(): 1 required, 0 provided in %s on line %d
 -- compile-error
