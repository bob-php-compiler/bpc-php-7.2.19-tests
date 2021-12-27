--TEST--
Test is_subclass_of() function : wrong number of args
--FILE--
<?php
/* Prototype  : proto bool is_subclass_of(object object, string class_name)
 * Description: Returns true if the object has this class as one of its parents
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing is_subclass_of() : error conditions ***\n";


//Test is_subclass_of with one more than the expected number of arguments
echo "\n-- Testing is_subclass_of() function with more than expected no. of arguments --\n";
$object = new stdclass();
$class_name = 'string_val';
$allow_string = false;
$extra_arg = 10;
var_dump( is_subclass_of($object, $class_name, $allow_string, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_subclass_of(): 3 at most, 4 provided in %s on line %d
 -- compile-error
