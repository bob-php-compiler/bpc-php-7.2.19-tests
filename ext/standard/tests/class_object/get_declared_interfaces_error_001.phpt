--TEST--
Test get_declared_interfaces() function : error conditions
--FILE--
<?php
/* Prototype  : proto array get_declared_interfaces()
 * Description: Returns an array of all declared interfaces.
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing get_declared_interfaces() : error conditions ***\n";

// One argument
echo "\n-- Testing get_declared_interfaces() function with one argument --\n";
$extra_arg = 10;
var_dump( get_declared_interfaces($extra_arg) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_declared_interfaces(): 0 at most, 1 provided in %s on line 13
 -- compile-error
