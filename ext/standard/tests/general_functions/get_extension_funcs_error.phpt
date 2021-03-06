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

echo "\n-- Invalid extension name --\n";
var_dump(get_extension_funcs("foo"));

?>
===DONE===
--EXPECTF--
*** Testing get_extension_funcs() : error conditions ***

-- Invalid extension name --
bool(false)
===DONE===
