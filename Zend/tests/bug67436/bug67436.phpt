--TEST--
bug67436: Autoloader isn't called if user defined error handler is present
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

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
});

a::staticTest();

$b = new b();
$b->test();
--EXPECT--
b::test()
a::test(c::TESTCONSTANT)
