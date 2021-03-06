--TEST--
bug67436: E_STRICT instead of custom error handler
--INI--
error_reporting=-1
--ARGS--
--bpc-include-file Zend/tests/bug67436/a.php --bpc-include-file Zend/tests/bug67436/b.php --bpc-include-file Zend/tests/bug67436/c.php
--FILE--
<?php

spl_autoload_register(function($classname) {
	if (in_array($classname, array('a','b','c'))) {
		require_once __DIR__ . "/{$classname}.php";
	}
});

a::staticTest();

$b = new b();
$b->test();
--EXPECTF--
Warning: Declaration of b::test() should be compatible with a::test($arg = c::TESTCONSTANT) in bug67436%eb.php on line %d
b::test()
a::test(c::TESTCONSTANT)
