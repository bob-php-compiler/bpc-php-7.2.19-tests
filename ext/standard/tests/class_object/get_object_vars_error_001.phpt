--TEST--
Test get_object_vars() function : error conditions - wrong number of args
--FILE--
<?php
/* Prototype  : proto array get_object_vars(object obj)
 * Description: Returns an array of object properties
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing get_object_vars() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing get_object_vars() function with Zero arguments --\n";
var_dump( get_object_vars() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function get_object_vars(): 1 required, 0 provided in %s on line %d
 -- compile-error
