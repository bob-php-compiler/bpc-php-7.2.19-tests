--TEST--
Inexistent class as type receiving scalar argument
--ARGS--
--bpc-include-file Zend/tests/type_declarations/inexistent_class_hint_with_scalar_arg.inc
--FILE--
<?php

function foo(bar $ex) {}
foo(null);

?>
--EXPECTF--
Fatal error: Uncaught TypeError: Argument 1 passed to foo() must be an instance of bar, null given, called in %s on line %d and defined in %s:%d
Stack trace:
#0 %s(%d): foo(NULL)
#1 {main}
  thrown in %s on line %d
