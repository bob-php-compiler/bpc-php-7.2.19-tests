--TEST--
Test get_class_methods() function : error conditions
--FILE--
<?php
/* Prototype  : proto array get_class_methods(mixed class)
 * Description: Returns an array of method names for class or class instance.
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

/*
 * Test wrong number of arguments.
 */

echo "*** Testing get_class_methods() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing get_class_methods() function with Zero arguments --\n";
var_dump( get_class_methods() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function get_class_methods(): 1 required, 0 provided in %s on line %d
 -- compile-error
