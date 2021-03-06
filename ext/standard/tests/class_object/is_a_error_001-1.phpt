--TEST--
Test is_a() function : error conditions - wrong number of args
--FILE--
<?php
/* Prototype  : proto bool is_a(object object, string class_name, bool allow_string)
 * Description: Returns true if the object is of this class or has this class as one of its parents
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing is_a() : error conditions ***\n";

//Test is_a with one more than the expected number of arguments
echo "\n-- Testing is_a() function with more than expected no. of arguments --\n";
$object = new stdclass();
$class_name = 'string_val';
$allow_string = false;
$extra_arg = 10;

var_dump( is_a($object, $class_name, $allow_string, $object) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_a(): 3 at most, 4 provided in %s on line %d
 -- compile-error
