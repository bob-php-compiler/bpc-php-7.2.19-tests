--TEST--
Bug #49908 (throwing exception in __autoload crashes when interface is not defined)
--ARGS--
--bpc-include-file Zend/tests/bug49908.inc
--FILE--
<?php

spl_autoload_register(function ($className) {
	var_dump($className);

	if ($className == 'Foo') {
		class Foo implements Bar {};
	} else {
		throw new Exception($className);
	}
});

new Foo;

?>
--EXPECTF--
string(3) "Foo"
string(3) "Bar"

Fatal error: Uncaught Exception: Bar in %s:%d
Stack trace:
#0 [internal function]: {closure}('Bar')
#1 %s(%d): spl_autoload_call('Bar')
#2 [internal function]: {closure}('Foo')
#3 %s(%d): spl_autoload_call('Foo')
#4 {main}
  thrown in %s on line %d
