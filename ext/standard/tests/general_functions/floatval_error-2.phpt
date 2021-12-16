--TEST--
Testing floatval() and its alias doubleval() : error conditions -  wrong numbers of parametersns
--FILE--
<?php
/* Prototype: float floatval( mixed $var );
 * Description: Returns the float value of var.
 */

echo "*** Testing floatval() and doubleval() : error conditions ***\n";


echo "\n-- Testing floatval() and doubleval() function with more than expected no. of arguments --\n";
var_dump( floatval(10.5, FALSE) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function floatval(): 1 at most, 2 provided in %s on line %d
 -- compile-error
