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

// Zero arguments
echo "\n-- Testing class_exists() function with Zero arguments --\n";
var_dump( class_exists() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function class_exists(): 1 required, 0 provided in %s on line %d
 -- compile-error
