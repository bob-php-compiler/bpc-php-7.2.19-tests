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

// Testing is_a with one less than the expected number of arguments
echo "\n-- Testing is_a() function with less than expected no. of arguments --\n";
$object = new stdclass();
var_dump( is_a($object) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_a(): 2 required, 1 provided in %s on line %d
 -- compile-error
