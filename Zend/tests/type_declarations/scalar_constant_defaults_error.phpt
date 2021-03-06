--TEST--
Scalar type - default via constants - error condition
--SKIPIF--
skip typehint argument default value cannot be php-constant
--FILE--
<?php

const STRING_VAL = "test";

function int_val(int $a = STRING_VAL): int {
	return $a;
}

var_dump(int_val());

?>
--EXPECTF--
Fatal error: Uncaught TypeError: Argument 1 passed to int_val() must be of the type integer, string given, called in %s on line %d and defined in %s:%d
Stack trace:
#0 %s(%d): int_val()
#1 {main}
  thrown in %s on line %d
