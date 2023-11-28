--TEST--
Trying to use an undefined trait
--ARGS--
--bpc-include-file Zend/tests/traits/error_002.inc \
--FILE--
<?php

class A {
	use abc;
}

?>
--EXPECTF--
Fatal error: Trait 'abc' not found in %s on line %d
