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

echo "\n-- Too few arguments --\n";
var_dump(get_extension_funcs());

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function get_extension_funcs(): 1 required, 0 provided in %s on line %d
 -- compile-error
