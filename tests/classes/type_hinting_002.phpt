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
Error: problem running command 'bigloo', exit status 255
Rerunning with -v[234] may provide more information.
