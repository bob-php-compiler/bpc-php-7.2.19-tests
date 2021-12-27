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


// Testing is_subclass_of with one less than the expected number of arguments
echo "\n-- Testing is_subclass_of() function with less than expected no. of arguments --\n";
$object = new stdclass();
var_dump( is_subclass_of($object) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_subclass_of(): 2 required, 1 provided in %s on line %d
 -- compile-error
