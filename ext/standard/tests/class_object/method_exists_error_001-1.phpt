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


// Testing method_exists with one less than the expected number of arguments
echo "\n-- Testing method_exists() function with less than expected no. of arguments --\n";
$object = new stdclass();
var_dump( method_exists($object) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function method_exists(): 2 required, 1 provided in %s on line %d
 -- compile-error
