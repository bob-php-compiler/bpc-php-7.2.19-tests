--TEST--
is_a() and is_subclass_of() shouldn't call __autoload
--INI--
error_reporting=14335
--ARGS--
--bpc-include-file Zend/tests/is_a.inc
--FILE--
<?php
spl_autoload_register(function ($name) {
	echo("AUTOLOAD '$name'\n");
	include "is_a.inc";
});

class BASE {
}

interface I {
}

class A extends BASE implements I {
}

$a = new A;
var_dump(is_a($a, "B1"));
var_dump(is_a($a, "A"));
var_dump(is_a($a, "BASE"));
var_dump(is_a($a, "I"));
var_dump(is_subclass_of($a, "B2"));
var_dump(is_subclass_of($a, "A"));
var_dump(is_subclass_of($a, "BASE"));
var_dump(is_subclass_of($a, "I"));

var_dump(is_subclass_of("X1", "X2"));
?>
--EXPECT--
bool(false)
bool(true)
bool(true)
bool(true)
bool(false)
bool(false)
bool(true)
bool(true)
AUTOLOAD 'X1'
bool(false)
