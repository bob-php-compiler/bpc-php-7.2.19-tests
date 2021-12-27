--TEST--
Test class_exists() function : error conditions (wrong number of arguments)
--FILE--
<?php
/* Prototype  : proto bool class_exists(string classname [, bool autoload])
 * Description: Checks if the class exists
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

/**
 * Test wrong number of arguments
 */

echo "*** Testing class_exists() : error conditions ***\n";

//Test class_exists with one more than the expected number of arguments
echo "\n-- Testing class_exists() function with more than expected no. of arguments --\n";
$classname = 'string_val';
$autoload = true;
$extra_arg = 10;
var_dump( class_exists($classname, $autoload, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function class_exists(): 2 at most, 3 provided in %s on line %d
 -- compile-error
