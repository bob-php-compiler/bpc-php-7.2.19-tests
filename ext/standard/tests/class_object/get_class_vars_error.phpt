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


//Test get_class_vars with one more than the expected number of arguments
echo "\n-- Testing get_class_vars() function with more than expected no. of arguments --\n";
$obj = new stdclass();
$extra_arg = 10;
var_dump(get_class_vars($obj,$extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_class_vars(): 1 at most, 2 provided in %s on line %d
 -- compile-error
