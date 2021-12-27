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

//Test get_object_vars with one more than the expected number of arguments
echo "\n-- Testing get_object_vars() function with more than expected no. of arguments --\n";
$obj = new stdclass();
$extra_arg = 10;
var_dump( get_object_vars($obj, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_object_vars(): 1 at most, 2 provided in %s on line %d
 -- compile-error
