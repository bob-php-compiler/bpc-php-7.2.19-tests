--TEST--
Test method_exists() function : error conditions - wrong number of args
--FILE--
<?php
/* Prototype  : proto bool method_exists(object object, string method)
 * Description: Checks if the class method exists
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing method_exists() : error conditions ***\n";


//Test method_exists with one more than the expected number of arguments
echo "\n-- Testing method_exists() function with more than expected no. of arguments --\n";
$object = new stdclass();
$method = 'string_val';
$extra_arg = 10;
var_dump( method_exists($object, $method, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function method_exists(): 2 at most, 3 provided in %s on line %d
 -- compile-error
