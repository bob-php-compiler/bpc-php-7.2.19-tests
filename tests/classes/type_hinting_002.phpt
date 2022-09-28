--TEST--
ZE2 class type hinting non existing class
--FILE--
<?php

class Foo {
	function a(NonExisting $foo) {}
}

$o = new Foo;
$o->a($o);
?>
--EXPECTF--
%aUnbound variable -- *CLASS-nonexisting*%a
