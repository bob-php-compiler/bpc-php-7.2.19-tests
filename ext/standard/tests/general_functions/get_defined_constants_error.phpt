--TEST--
Test get_defined_constants() function : error conditions
--FILE--
<?php
/* Prototype  : array get_defined_constants  ([ bool $categorize  ] )
 * Description:  Returns an associative array with the names of all the constants and their values
 * Source code: Zend/zend_builtin_functions.c
 */

echo "*** Testing get_defined_constants() : error conditions ***\n";

echo "\n-- Testing get_defined_constants() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( get_defined_constants(true, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_defined_constants(): 1 at most, 2 provided in %s on line 11
 -- compile-error
