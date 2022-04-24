--TEST--
Bug #48023 (spl_autoload_register didn't addref closures)
--ARGS--
--bpc-include-file ext/spl/tests/bug48023.inc \
--FILE--
<?php
spl_autoload_register(function($class){});

new Foo;

?>
===DONE===
--EXPECTF--
Fatal error: Uncaught Error: Class 'Foo' not found in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
