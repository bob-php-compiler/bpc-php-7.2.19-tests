--TEST--
Test get_declared_traits() function : error conditions
--FILE--
<?php
/* Prototype  : proto array get_declared_traits()
 * Description: Returns an array of all declared traits.
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing get_declared_traits() : error conditions ***\n";

// One argument
echo "\n-- Testing get_declared_traits() function with one argument --\n";
$extra_arg = 10;
var_dump( get_declared_traits($extra_arg) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_declared_traits(): 0 at most, 1 provided in %s on line %d
 -- compile-error
