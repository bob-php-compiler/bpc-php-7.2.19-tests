--TEST--
instanceof shouldn't call __autoload
--ARGS--
--bpc-include-file Zend/tests/instanceof.inc
--FILE--
<?php
spl_autoload_register(function ($name) {
	echo("AUTOLOAD '$name'\n");
});

class A {
}
$a = new A;
var_dump($a instanceof B);
var_dump($a instanceof A);
?>
--EXPECT--
bool(false)
bool(true)
