--TEST--
Test get_declared_interfaces() function : autoloading of interfaces
--ARGS--
--bpc-include-file ext/standard/tests/class_object/AutoInterface.inc \
--FILE--
<?php
/* Prototype  : proto array get_declared_interfaces()
 * Description: Returns an array of all declared interfaces.
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */


echo "*** Testing get_declared_interfaces() : autoloading of interfaces ***\n";

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.inc';
});

echo "\n-- before interface is used --\n";
var_dump(in_array('AutoInterface', get_declared_interfaces()));


echo "\n-- after interface is used --\n";
class Implementor implements AutoInterface {}
var_dump(in_array('AutoInterface', get_declared_interfaces()));

echo "\nDONE\n";
?>
--EXPECTF--
*** Testing get_declared_interfaces() : autoloading of interfaces ***

-- before interface is used --
bool(false)

-- after interface is used --
bool(true)

DONE
