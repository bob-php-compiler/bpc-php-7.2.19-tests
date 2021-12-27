--TEST--
Test get_class_vars() function : error conditions
--FILE--
<?php
/* Prototype  : array get_class_vars(string class_name)
 * Description: Returns an array of default properties of the class.
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing get_class_vars() : error conditions ***\n";


// Testing get_class_vars with one less than the expected number of arguments
echo "\n-- Testing get_class_vars() function with less than expected no. of arguments --\n";
var_dump(get_class_vars());

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function get_class_vars(): 1 required, 0 provided in %s on line %d
 -- compile-error
