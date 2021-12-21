--TEST--
Test get_extension_funcs() function : error conditions
--FILE--
<?php
/* Prototype  : array get_extension_funcs  ( string $module_name  )
 * Description: Returns an array with the names of the functions of a module.
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing get_extension_funcs() : error conditions ***\n";

$extra_arg = 1;
echo "\n-- Too many arguments --\n";
var_dump(get_extension_funcs("standard", $extra_arg));

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_extension_funcs(): 1 at most, 2 provided in %s on line %d
 -- compile-error
